<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST["website"] == ""  && $_REQUEST["name"] != "" && $_REQUEST["email"] != "") {
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
echo $email;
$message = $_REQUEST['message'];
$tel = $_REQUEST['tel'];
$formcontent="From: $name \nE-mail: $email \nTel: $tel \nMessage: $message";
$recipient = "info@mkh-bremen.de";
// $recipient = "liridon@solution25.com";
$subject = "Kontaktformular Webseite MKH";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo "Thank You!";
//  header('Location: ' . $_SERVER['HTTP_REFERER']);
header('Location: success.php');
}
else{

}
?>


