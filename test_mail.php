<?php
// Test if mail function is available
if (function_exists('mail')) {
    echo "Mail function is available\n";
    
    // Test sending a simple email
    $to = "quebeevents30@gmail.com";
    $subject = "Test Email from Quebee Events";
    $message = "This is a test email to check if the mail function is working properly.";
    $headers = "From: webmaster@" . $_SERVER['SERVER_NAME'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Test email sent successfully!";
    } else {
        echo "Failed to send test email. Mail function may be disabled or misconfigured.";
    }
} else {
    echo "Mail function is NOT available on this server";
}
?>