<?php

session_start();



if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR MAHASISWA</title>
</head>

<body>
  <a href="logout.php">LOGOUT</a>
  <h3>Daftar mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>

  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">CARI</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>#</td>
      <td>Gambar</td>
      <td>Nama</td>
      <td>Aksi</td>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color : red; font-style: italic;">!!!Data Mahasiswa Tidak Ditemukan!!!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>