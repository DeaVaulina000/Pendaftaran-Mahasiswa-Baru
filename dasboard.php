<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h2>Selamat datang, <?php echo $user['nama']; ?>!</h2>
  <p>Email: <?php echo $user['email']; ?></p>
  <p>Program Studi: <?php echo $user['prodi']; ?></p>
  <a href="logout.php">Logout</a>
</div>
</body>
</html>