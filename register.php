<?php
include "config.php";

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $prodi = $_POST['prodi'];

    // cek email duplikat
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Email sudah terdaftar, silakan login!');window.location='login.php';</script>";
    } else {
        $query = "INSERT INTO users (nama, email, password, prodi) VALUES ('$nama','$email','$password','$prodi')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Pendaftaran berhasil, silakan login');window.location='login.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Mahasiswa Baru</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h2>Pendaftaran Mahasiswa Baru</h2>
  <form method="POST">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Program Studi</label>
    <select name="prodi" required>
      <option value="">-- Pilih Prodi --</option>
      <option value="Informatika">Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Teknik Elektro">Teknik Elektro</option>
    </select>

    <button type="submit" name="register">Daftar</button>
  </form>
  <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</div>
</body>
</html>
