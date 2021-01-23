<?php

if (isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username   = 'use your's';                   
$mail->Password   = 'for test';   
$mail->name = $name;
$mail->email = $email;
$mail->Phone = $phone;
$mail->Subject = $subject;

$mailTo = "ntechskills@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php");

}
