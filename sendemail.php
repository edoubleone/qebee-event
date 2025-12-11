<?php
$cfg = [];
if (file_exists(__DIR__ . '/config.php')) {
    $loaded = require __DIR__ . '/config.php';
    if (is_array($loaded)) { $cfg = $loaded; }
}
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = isset($_POST['rsvp_name']) ? trim($_POST['rsvp_name']) : '';
    $email = isset($_POST['rsvp_email']) ? trim($_POST['rsvp_email']) : '';
    $phone = isset($_POST['form_phone']) ? trim($_POST['form_phone']) : '';
    $message = isset($_POST['form_message']) ? trim($_POST['form_message']) : '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
        exit;
    }
    
    $to = isset($cfg['to_email']) && $cfg['to_email'] !== '' ? $cfg['to_email'] : "info@queebeevent.com";
    
    // Create email subject
    $subject = "New Contact Form Submission from Quebee Events";
    
    // Create email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message\n";
    
    $fromEmailCfg = isset($cfg['from_email']) ? $cfg['from_email'] : '';
    $fromNameCfg = isset($cfg['from_name']) ? $cfg['from_name'] : 'Website';
    $fromHeaderEmail = (strpos($fromEmailCfg, '@') !== false) ? $fromEmailCfg : $email;
    $headers = "From: ".$fromNameCfg." <".$fromHeaderEmail.">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $smtpHost = isset($cfg['smtp_host']) ? $cfg['smtp_host'] : '';
    $smtpUser = isset($cfg['smtp_user']) ? $cfg['smtp_user'] : '';
    $smtpPass = isset($cfg['smtp_pass']) ? $cfg['smtp_pass'] : '';
    $smtpSecure = isset($cfg['smtp_secure']) ? $cfg['smtp_secure'] : '';
    $smtpPort = isset($cfg['smtp_port']) ? (int)$cfg['smtp_port'] : 0;
    $fromEmail = isset($cfg['from_email']) && $cfg['from_email'] !== '' ? $cfg['from_email'] : ($smtpUser !== '' ? $smtpUser : $email);
    if (strpos($fromEmail, '@') === false) { $fromEmail = $smtpUser !== '' ? $smtpUser : $email; }
    $fromName = isset($cfg['from_name']) && $cfg['from_name'] !== '' ? $cfg['from_name'] : 'Website';

    $send_via_smtp = $smtpHost !== '' && $smtpUser !== '' && $smtpPass !== '' && $smtpPort > 0;
    $sent = false;
    $smtp_error_step = '';
    if ($send_via_smtp) {
        $sent = (function($host,$port,$secure,$user,$pass,$fromEmail,$fromName,$to,$replyTo,$subject,$body,&$smtp_error_step){
            $transport = $secure === 'ssl' ? 'ssl://'.$host : $host;
            $fp = @fsockopen($transport,$port,$errno,$errstr,30);
            if(!$fp){ $smtp_error_step = 'connect'; return false; }
            $read = function() use ($fp){
                $data = '';
                while(($line = fgets($fp,515)) !== false){
                    $data .= $line;
                    if(strlen($line) >= 4 && $line[3] === ' '){ break; }
                }
                return $data;
            };
            $expect = function($codes) use ($read){
                $resp = $read();
                $code = substr($resp,0,3);
                return in_array($code,$codes);
            };
            if(substr($read(),0,3) !== '220'){ fclose($fp); $smtp_error_step = 'greeting'; return false; }
            fwrite($fp,"EHLO ".$host."\r\n"); if(!$expect(['250'])){ fclose($fp); $smtp_error_step = 'ehlo'; return false; }
            if($secure === 'tls'){
                fwrite($fp,"STARTTLS\r\n"); if(substr($read(),0,3) !== '220'){ fclose($fp); $smtp_error_step = 'starttls'; return false; }
                if(!stream_socket_enable_crypto($fp,true,STREAM_CRYPTO_METHOD_TLS_CLIENT)){ fclose($fp); $smtp_error_step = 'tls_crypto'; return false; }
                fwrite($fp,"EHLO ".$host."\r\n"); if(!$expect(['250'])){ fclose($fp); $smtp_error_step = 'ehlo_after_tls'; return false; }
            }
            fwrite($fp,"AUTH LOGIN\r\n"); if(!$expect(['334'])){ fclose($fp); $smtp_error_step = 'auth_login_cmd'; return false; }
            fwrite($fp,base64_encode($user)."\r\n"); if(!$expect(['334'])){ fclose($fp); $smtp_error_step = 'auth_user'; return false; }
            fwrite($fp,base64_encode($pass)."\r\n"); if(!$expect(['235'])){ fclose($fp); $smtp_error_step = 'auth_pass'; return false; }
            $mailFrom = $fromEmail !== '' ? $fromEmail : $user;
            fwrite($fp,"MAIL FROM:<".$mailFrom.">\r\n"); if(!$expect(['250'])){ fclose($fp); $smtp_error_step = 'mail_from'; return false; }
            fwrite($fp,"RCPT TO:<".$to.">\r\n"); if(!$expect(['250','251'])){ fclose($fp); $smtp_error_step = 'rcpt_to'; return false; }
            fwrite($fp,"DATA\r\n"); if(!$expect(['354'])){ fclose($fp); $smtp_error_step = 'data_cmd'; return false; }
            $date = date('r');
            $headers = "From: ".$fromName." <".$mailFrom.">\r\n".
                       "Reply-To: ".$replyTo."\r\n".
                       "To: <".$to.">\r\n".
                       "Subject: ".$subject."\r\n".
                       "MIME-Version: 1.0\r\n".
                       "Content-Type: text/plain; charset=UTF-8\r\n".
                       "Date: ".$date."\r\n";
            fwrite($fp,$headers."\r\n".$body."\r\n.\r\n");
            $resp = $read();
            $ok = substr($resp,0,3) === '250';
            fwrite($fp,"QUIT\r\n");
            fclose($fp);
            return $ok;
        })($smtpHost,$smtpPort,$smtpSecure,$smtpUser,$smtpPass,$fromEmail,$fromName,$to,$email,$subject,$email_body,$smtp_error_step);
        if (!$sent) {
            $sent = mail($to, $subject, $email_body, $headers);
        }
    } else {
        $sent = mail($to, $subject, $email_body, $headers);
    }
    
    if ($sent) {
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Thank you for contacting us. We will get back to you soon!']);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Sorry, there was an error sending your message. Please try again later.', 'debug' => $send_via_smtp ? $smtp_error_step : 'mail_failed']);
    }
} else {
    // Not a POST request
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>