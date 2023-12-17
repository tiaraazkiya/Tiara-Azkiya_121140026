<?php
include "config.php";

// Menambah data
$sql = "INSERT INTO Users (name, email, gender, hobbies)
VALUES ('Ara Aya', 'ara.aya@gmail.com', 'Perempuan', 'Membaca, Olahraga, Musik')";
$conn->query($sql);

// Mengambil data
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  echo "Nama: " . $row["name"] . "<br>";
  echo "Email: " . $row["email"] . "<br>";
  echo "Jenis Kelamin: " . $row["gender"] . "<br>";
  echo "Hobi: " . $row["hobbies"] . "<br><br>";
}

$conn->close();
?>