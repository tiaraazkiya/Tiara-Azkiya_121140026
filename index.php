<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>UAS Pemograman WEB</title>
  <link rel="stylesheet" type="text/css" href="styless.css">
  <script src="script.js"></script>
</head>
<body>
  <h2>Form Input Data Mahasiswa</h2>
  <form id="myForm" method="post" action="process.php">
    Nama: <input type="text" id="name" name="name"><br><br>
    Email: <input type="text" id="email" name="email"><br><br>
    Jenis Kelamin: 
    <div class="gender-section">
         <label for="gender1"></label>
  <input type="radio" id="gender1" name="gender" value="Laki-laki">
  <label for="gender1">Laki-laki</label>
  <input type="radio" id="gender2" name="gender" value="Perempuan">
  <label for="gender2">Perempuan</label>
</div>
    Hobi: 
    <div class="hobby-section">
        <label for="hobby1"></label>
    <input type="checkbox" id="hobby1" name="hobby[]" value="Membaca">
    <label for="hobby1">Membaca</label>
    <input type="checkbox" id="hobby2" name="hobby[]" value="Olahraga">
    <label for="hobby2">Olahraga</label>
    <input type="checkbox" id="hobby3" name="hobby[]" value="Musik">
    <label for="hobby3">Musik</label><br><br>
    <input type="submit" value="Submit">
  </form>
  <table id="data">
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Jenis Kelamin</th>
      <th>Hobi</th>
    </tr>
    <?php
    if (isset($_SESSION['data'])) {
      foreach ($_SESSION['data'] as $key => $row) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . implode(", ", $row['hobby']) . "</td>";
        echo "</tr>";
      }
    }
    ?>
  </table>

  <h2>Kriteria Penilaian:</h2>
  <ul>
    <li>Bagian 1: Client-side Programming (Bobot: 30%)</li>
    <ul>
      <li>1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.</li>
      <li>1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web.</li>
    </ul>
    <li>Bagian 2: Server-side Programming (Bobot: 30%)</li>
    <ul>
      <li>2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti $_POST atau $_GET. Tampilkan hasil pengolahan data ke layar.</li>
      <li>2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.</li>
    </ul>
    <li>Bagian 3: Database Management (Bobot: 20%)</li>
    <ul>
      <li>3.1 (5%) Buatlah sebuah tabel pada database MySQL.</li>
      <li>3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.</li>
      <li>3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.</li>
    </ul>
    <li>Bagian 4: State Management (Bobot: 20%)</li>
    <ul>
      <li>4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.</li>
      <li>4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.</li>
    </ul>
  </ul>
</body>
</html>