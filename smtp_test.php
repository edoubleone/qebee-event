<?php
$cfg = [];
if (file_exists(__DIR__ . '/config.php')) {
    $loaded = require __DIR__ . '/config.php';
    if (is_array($loaded)) { $cfg = $loaded; }
}
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST['rsvp_name'] = 'SMTP Test';
$_POST['rsvp_email'] = isset($cfg['smtp_user']) ? $cfg['smtp_user'] : 'test@example.com';
$_POST['form_phone'] = '0000000000';
$_POST['form_message'] = 'Testing SMTP sending from Quebee Events.';
include __DIR__ . '/sendemail.php';
?>