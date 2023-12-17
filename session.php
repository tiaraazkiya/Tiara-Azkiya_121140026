<?php
session_start();

$_SESSION['username'] = 'Ara Aya';
$_SESSION['email'] = 'ara.aya@gmail.com';

$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo "Username: " . $username . "<br>";
echo "Email: " . $email;
?>