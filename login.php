<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h2>Login Mahasiswa</h2>
  <form method="POST">
    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" name="login">Login</button>
  </form>
  <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</div>
</body>
</html>
