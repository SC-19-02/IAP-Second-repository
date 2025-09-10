<?php
require __DIR__ . '/../../Plugins/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../../Plugins/PHPMailer/src/SMTP.php';
require __DIR__ . '/../../Plugins/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailService{
    public function Send_Mail($conf, $mailContent) {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = $conf['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $conf['smtp_user'];
            $mail->Password   = $conf['smtp_pass'];
            $mail->SMTPSecure = $conf['smtp_secure'];
            $mail->Port       = $conf['smtp_port'];

            $mail->setFrom($mailContent['mail_from'], $mailContent['name_from']);
            $mail->addAddress($mailContent['mail_to'], $mailContent['name_to']);

            $mail->isHTML(true);
            $mail->Subject = $mailContent['subject'];
            $mail->Body    = $mailContent['body'];

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. {$mail->ErrorInfo}";
        }
    }
}
