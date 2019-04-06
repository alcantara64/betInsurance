<?php
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

function sendEmail ($sender, $recepient, $mysubject, $mymessage,$email_password,$user_name)
{

$from = $sender; //enter your email address
 $to = $recepient; //enter the email address of the contact your sending to
 $subject = $mysubject; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = $mymessage; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = $user_name; //  your email address (same as webmail username)
 $password = $email_password; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

//if (PEAR::isError($mail)) {
//echo("<p>" . $mail->getMessage() . "</p>");
//}
//else {
//echo("<p>Message successfully sent!</p>");
//// header("Location: http://www.example.com/");
//}
}

?> 

