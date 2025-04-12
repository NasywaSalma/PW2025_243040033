<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
</head>
<body>
  <h2>
    <?php
    if ($username === 'admin' && $password === '12345') {
        echo 'Selamat Datang Admin';
    } else {
        echo 'Username / Password salah';
    }
    ?>
  </h2>
</body>
</html>