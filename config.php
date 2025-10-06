<?php
$host = "localhost";
$user = "root";  // sesuaikan dengan MySQL kamu
$pass = "";      // isi password kalau ada
$db   = "mahasiswaaa";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
