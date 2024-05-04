<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';


class mailer{
    private $mail;
    function __construct(){
        $this->mail = new PHPMailer(true);
        try {
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = 'abdessadek6082@gmail.com';                     //SMTP username
            $this->mail->Password   = 'rsju gfqb ounv heqn';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port       = 465; 
        } catch (Exception $e) {
            echo $this->mail-ErrorInfo;
        }
    }
    function Recipients($info){
        extract($info);
    try {
        $this->mail->setFrom($email, $sender);
        $this->mail->addAddress($email, $to_name);     //Add a recipient
        $this->mail->addReplyTo($email, $reply_name);
    } catch (Exception $e) {
        echo $this->mail->ErrorInfo;
    }
    }
    function Content($subject,$body,$AltBody,$isHtml=true){
    try {
        $this->mail->isHTML($isHtml);                                  //Set email format to HTML
        $this->mail->Subject = $subject;
        $this->mail->Body    = $body;
        $this->mail->AltBody = $AltBody;
    }catch (Exception $e) {
        echo $this->mail->ErrorInfo;
    }
}
    function Send(){
        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo $this->mail->ErrorInfo;
        }
    }
}
$info = [
    'email' => 'abdessadek6082@gmail.com',
    'sender' => 'hmiddouch',
    'to_name' => 'Abdou',
    'reply_name' => 'information'
];
$mail = new Mailer();
$mail->Recipients($info);
$mail->Content('hello','to what ','footer');
$mail->Send();