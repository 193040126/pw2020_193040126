<?php
//menhubungkan dengan file php lainnya 
require 'functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $elektronik = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 7a</title>
  <style></style>
</head>

<body>

  <div class="logout">
    <a href="logout.php" onclick="return confirm('apakah anda yakin keluar dari halaman admin?')"><button>logout</button></a>
  </div>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div> <br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

  <table border="1" cellpadding="12" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Merk</th>
      <th>Tipe</th>
      <th>Tahun Rilis</th>
      <th>Harga</th>
    </tr>

    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>

      <?php $i = 1; ?>
      <?php foreach ($elektronik as $elek) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $elek['id']; ?>" onclick="return confirm('Ubah Data')"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $elek['id']; ?>" onclick="return confirm('Hapus Data')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $elek["foto"]; ?>" width="60"></td>
          <td><?= $elek["merk"]; ?></td>
          <td><?= $elek["tipe"]; ?></td>
          <td><?= $elek["tahun_rilis"]; ?></td>
          <td><?= $elek["harga"]; ?></td>
        </tr>
        <?= $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>