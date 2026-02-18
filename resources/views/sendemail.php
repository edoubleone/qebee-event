<?php
// Allow CORS from local preview server
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

header('Content-Type: application/json');

// Load SMTP credentials
$cfg = require __DIR__ . '/email-config.php';

// Simple input sanitization
function field($key) {
    return isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
}

$name    = field('rsvp_name');
$email   = field('rsvp_email');
$phone   = field('form_phone');
$message = field('form_message');

if ($name === '' || $email === '' || $message === '') {
    echo json_encode(['success' => false, 'message' => 'Please fill in name, email, and message.']);
    exit;
}

// Try to load PHPMailer (Composer or local src fallback)
$mailerLoaded = false;
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
    $mailerLoaded = true;
} else {
    $phpMailerPath = __DIR__ . '/PHPMailer/src';
    if (file_exists($phpMailerPath . '/PHPMailer.php') && file_exists($phpMailerPath . '/SMTP.php') && file_exists($phpMailerPath . '/Exception.php')) {
        require $phpMailerPath . '/Exception.php';
        require $phpMailerPath . '/PHPMailer.php';
        require $phpMailerPath . '/SMTP.php';
        $mailerLoaded = true;
    }
}

if (!$mailerLoaded) {
    echo json_encode([
        'success' => false,
        'message' => 'Email service not available: PHPMailer is missing. Install with Composer (composer require phpmailer/phpmailer) or add PHPMailer/src into queebee/PHPMailer.',
    ]);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = $cfg['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['smtp_user'];
    $mail->Password   = $cfg['smtp_pass'];
    $mail->SMTPSecure = $cfg['smtp_secure']; // ssl or tls
    $mail->Port       = (int)$cfg['smtp_port'];
    // Relax SSL checks for local dev environments. Remove in production if possible.
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    // Sender and recipient
    $fromEmail = filter_var($cfg['from_email'], FILTER_VALIDATE_EMAIL) ? $cfg['from_email'] : $cfg['smtp_user'];
    $mail->setFrom($fromEmail, $cfg['from_name']);
    $mail->addAddress($cfg['to_email']);
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New contact form submission';
    $mail->Body    = sprintf(
        '<h3>New message from Quebee Events site</h3><p><strong>Name:</strong> %s</p><p><strong>Email:</strong> %s</p><p><strong>Phone:</strong> %s</p><p><strong>Message:</strong><br>%s</p>',
        htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'),
        nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'))
    );
    $mail->AltBody  = "New message from Quebee Events site\n\nName: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $e->getMessage()]);
}