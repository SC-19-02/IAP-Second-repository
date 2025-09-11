<?php
require __DIR__ . '/../autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mailService = new MailService();

$name  = $_POST['name'] ?? ''; 
$email = $_POST['email'] ?? '';

$mailContent = [
    'name_from' => 'StudyHub',
    'mail_from' => 'sheel2002lee@gmail.com',  
    'name_to'   => $name,                   
    'mail_to'   => $email,                    
    'subject'   => 'Welcome to StudyHub',
    'body'      => "Hello <b>{$name}</b>,<br><br>
                    Thank you for joining StudyHub! We’re excited to have you on board.<br><br>
                    Best regards,<br>
                    The StudyHub Team"
];

$conf = [
    'smtp_host'   => 'smtp.gmail.com',
    'smtp_user'   => 'sheel2002lee@gmail.com',
    'smtp_pass'   => '',      
    'smtp_secure' => PHPMailer::ENCRYPTION_STARTTLS,
    'smtp_port'   => 587
];

$mailService->Send_Mail($conf, $mailContent);
