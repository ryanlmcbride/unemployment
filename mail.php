<?php

$sendTo=$_GET["sendToAddress"];
$messagebox=trim($_GET["message"]);
$message = '<html>
<p><strong> Send to: </strong></p>' . $sendTo . '<p><strong>Message</strong></p>' . $messagebox . '</html>';
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\vendor\autoload.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('hsccdc@gmail.com', 'HSCC DC TEAM');

   /* Add a recipient. */
   $mail->addAddress($sendTo, 'Ryan McBride');

   /* Set the subject. */
   $mail->Subject = 'Your Claim Has Been Submitted';

   /* Set the mail message body. */
   $mail->isHTML(TRUE);
   $mail->Body =$message;

   /* SMTP parameters. */

   /* Tells PHPMailer to use SMTP. */
 $mail->isSMTP();

 $mail->SMTPDebug = 1;

 /* SMTP server address. */
 $mail->Host = 'smtp.gmail.com';

 /* Use SMTP authentication. */
 $mail->SMTPAuth = TRUE;

 /* Set the encryption system. */
 $mail->SMTPSecure = 'tls';

 /* SMTP authentication username. */
 $mail->Username = 'hsccdcdev@gmail.com';

 /* SMTP authentication password.*/
 $mail->Password = 'Technology1';

 /* Set the SMTP port. */
 $mail->Port = 587;
   /* Finally send the mail. */
   $mail->send();

header('Location: success.php');
}

catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();

}
