<?php
session_start();
if ($_POST['Submit'] == 'Send')
{

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: sendmail.php?msg= Mail Sent!");
exit();
}
?>
<html>
<head>
<title>Email Pranks</title>
</head>
<body bgcolor="#ffffcc">
<h2 align="center"
