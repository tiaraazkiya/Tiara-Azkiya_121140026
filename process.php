<?php
session_start();

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];

// Generate ID unik untuk setiap data
$id = uniqid();

// Buat array data
$data = array(
  'id' => $id,
  'name' => $name,
  'email' => $email,
  'gender' => $gender,
  'hobby' => $hobby
);

// Tambahkan data ke dalam session
if (isset($_SESSION['data'])) {
  $_SESSION['data'][] = $data;
} else {
  $_SESSION['data'] = array($data);
}

// Kembali ke halaman index.php setelah proses penambahan data
header("Location: index.php");
exit;
?>