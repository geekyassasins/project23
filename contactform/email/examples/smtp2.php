<?php
/*
$msg.="Hi Suraj <small>(Admin)</small>,<br>Thank you for join with us<br>Your Login Credential is<br>usename: test <br>Password : test<br><br>Regards,<br>Narmware Team<br><br><hr>";                                
sendmail('sysuraj13@gmail.com','Suraj','Login Credentials for School or College Managment',$msg);
*/
function sendmail($to,$name,$sub,$msg)
{
require 'email/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
//$mail->Host = "smtp.gmail.com";
$mail->Host = "mail.narmware.com";

//enable this if you are using gmail smtp, for mandrill app it is not required
$mail->SMTPSecure = 'tls';                            

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "suraj@narmware.com";
//Password to use for SMTP authentication
$mail->Password = "suraj@123";
//Set who the message is to be sent from
//$mail->setFrom('from@yoursitename.com', 'From Name');
$mail->setFrom("info@narmware.com", "Accuintel Market Research");
//Set an alternative reply-to address
//$mail->addReplyTo('reply-to@yoursitename.com', 'Reply-to Name');
//Set who the message is to be sent to
$mail->addAddress($to, $name);
//Set the subject line
$mail->Subject = $sub;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$l=1;
  if($l<=1) {
$msg =($msg);   }
$mail->msgHTML($msg);

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if($l != 0) {
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
}
}

}
?>

