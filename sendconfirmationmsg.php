
<?php 
include("include/dbconnection.php");

$receiver = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to=$receiver;
// Your message
$Name = "JLEEM Realty "; //senders name 
$email = "johnleoabaigar@gmail.com"; //senders e-mail adress 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

// send email
$sentmail = mail($to,$subject,$message,$header);

// if not found

// if your email succesfully sent

if($sentmail){

header("Location:success.php");

}

 else {

echo "Cannot send Confirmation link to your e-mail address";

} 

?>
