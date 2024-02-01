<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

mail ("iro7899rajapaksha@gmail.cpm" , "New Message", $email_message);
header("location: ../mail-success.html");
?>


