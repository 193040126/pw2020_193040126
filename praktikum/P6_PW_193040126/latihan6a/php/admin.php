<?php
//menhubungkan dengan file php lainnya 
require 'functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ashiap</title>
  <style></style>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Merk</th>
      <th>Tipe</th>
      <th>Tahun Rilis</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($elektronik as $elek) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $elek["foto"]; ?>" width="60"></td>
        <td><?= $elek["merk"]; ?></td>
        <td><?= $elek["tipe"]; ?></td>
        <td><?= $elek["tahun_rilis"]; ?></td>
        <td><?= $elek["harga"]; ?></td>
      </tr>
      <?= $i++; ?>
    <?php endforeach; ?>

  </table>
</body>

</html>