<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
}

require 'functions.php';

//ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <button type="submit" style="background-color: maroon; font-weight: 900;"><a href="../index.php" style=" color: white; text-decoration: none;">KEMBALI KE HALAMAN KULIAH</a></button>
  <h3>Form Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required placeholder="admin">
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password" required placeholder="12345">
        </label>
      </li>
      <li>
        <button type="submit" name="login">LOGIN</button>
      </li>
      <li>
        <p>Belum punya akun? Registrasi di <a href="registrasi.php">disini</a></p>
      </li>
    </ul>

  </form>


</body>

</html>