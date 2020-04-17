<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR MAHASISWA</title>
</head>

<body>
  <h3>Daftar mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>#</td>
      <td>Gambar</td>
      <td>Nama</td>
      <td>Aksi</td>
    </tr>

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