<?php
require 'functions.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi berhasil!');
          document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
          alert('Registrasi gagal!');
          document.location.href = 'login.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register.css">
  <title>Latihan 7c</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST">

      <div class="use">
        <p><label for="username"></label></p>
        <p><input type="text" name="username" autofocus autocomplete="off" placeholder="Username" size="25" required></p>
      </div>

      <div class="pass">
        <p><label for="password"></label></p>
        <p><input type="password" name="password" autofocus autocomplete="off" placeholder="Password" size="25" required></p>
      </div>

      <div class="kps">
        <p><label for="password2"></label></p>
        <p><input type="password" name="password2" autofocus autocomplete="off" placeholder="Konfirmasi Password" size="25" required></p>
      </div>
      <div class="register">
        <button type="submit" name="register" style="color: maroon; font-weight: 900;">REGISTER</button>
        <button class="tombol-kembali"><a href="login.php" style="color: maroon; text-decoration: none; font-weight: 900">KEMBALI</a></button>
      </div>
    </form>
  </div>
</body>

</html>