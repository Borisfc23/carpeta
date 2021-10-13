<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
enviarEmail();
function enviarEmail(){
    if(isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['msj'])){
        $name = $_POST['nombre'];
        $msj = $_POST['msj'];
        $email = $_POST['email'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'borisfc96@gmail.com';                     //SMTP username
            $mail->Password   = '5251559bv';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('borisfc96@gmail.com', 'Borisfc96');
            $mail->addAddress('borisfc236@gmail.com', 'Borisfc23');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Correo de Contacto';
            $mail->Body    = 'Nombre:'.$name.' <br/>Correo:'.$email.'<br> Mensaje:'.$msj;

            $mail->send();
            echo 'Message  enviado Correctamente';
        } catch (Exception $e) {
            echo "Error al mandar un mensaje: {$mail->ErrorInfo}";
        }
    }else{
        return;
    }
}
//Create an instance; passing `true` enables exceptions