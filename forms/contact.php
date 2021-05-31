<?php

 //Llamado a los campos
 
  $name =$_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg =$_POST['message'];

 //Datos para el correo
 $receiving_email_address = 'agus.gramajodw@gmail.com';
 $title = 'Contacto Web';

 $mail_body = "<span>De: $name</span><br>";
 $mail_body .= "<span>Correo: $email</span><br>";
 $mail_body .= "<span>Asunto: $subject</span><br>";
 $mail_body .= "<span>Mensaje: $msg</span><br>";

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require '../phpMailer/Exception.php';
 require '../phpMailer/PHPMailer.php';
 require '../phpMailer/SMTP.php';
 

 //Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;    
    $mail->isSMTP();                                       
    $mail->Host = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'agus.gramajodw@gmail.com';                     //SMTP username
    $mail->Password   = 'mag32848400';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('agus.gramajodw@gmail.com', 'Agustina  Gramajo');
    $mail->addAddress('agus.gramajodw@gmail.com', 'Agustina Gramajo');  
    $mail->addCC($email, $name);    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $mail_body;
try {
    $mail->send();
    // header('Location:envio_ok.php');
    // echo "Tu mensaje se envio correctamente";
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}

//inserar en db
include('../actions/insertar_en_db.php');

?>
