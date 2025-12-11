<?php 
// SMTP configuration for sending emails 
// WARNING: Do not commit real credentials to public repos. 
// Restrict access to this server and consider moving secrets outside web root. 

return [ 
    'smtp_host'   => 'mail.firstclassfinserve.com', 
    'smtp_port'   => 587, 
    'smtp_secure' => 'tls', // 'ssl' for port 465, 'tls' for 587 
    'smtp_user'   => 'mailcheck@firstclassfinserve.com', 
    'smtp_pass'   => '?f0;g76$A$~f', 

    // Addresses 
    'from_email'  => 'mail.firstclassfinserve.com', 
    'from_name'   => 'Quebee Events', 
    // Change to the recipient you want to receive the contact messages 
    'to_email'    => 'info@queebeevent.com'
]; 
?>