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
  <button type="submit" style="background-color: maroon; font-weight: 900;"><a href="p10.php" style=" color: white; text-decoration: none;">KEMBALI KE HALAMAN PERTEMUAN 10</a></button>
  <h3>Daftar mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>#</td>
      <td>Gambar</td>
      <td>NRP</td>
      <td>Nama</td>
      <td>Email</td>
      <td>Jurusan</td>
      <td>Aksi</td>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>