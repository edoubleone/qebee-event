<?php
// SMTP configuration for sending emails
// WARNING: Do not commit real credentials to public repos.
// Restrict access to this server and consider moving secrets outside web root.

return [
    'smtp_host'   => 'mail.breemhealthcare.com',
    'smtp_port'   => 465,
    'smtp_secure' => 'ssl', // 'ssl' for port 465, 'tls' for 587
    'smtp_user'   => 'info@breemhealthcare.com',
    'smtp_pass'   => 'W3v2iiX3=]Qpk1dD',

    // Addresses
    'from_email'  => 'info@breemhealthcare.com',
    'from_name'   => 'Quebee Events',
    // Change to the recipient you want to receive the contact messages
    'to_email'    => 'quebeevents30@gmail.com',
];