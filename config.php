<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>