<?php
//menghubungkan dengan file php lainnya 
require 'functions.php';

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <title>latihan 7c</title>

  <!--my css -->
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body style="background-image: url(../assets/img/bg5.jpg);">

  <div class="navbar">
    <nav class="red darken-4">
      <div class="container" style="height: 150px;">
        <div class="nav-wrapper">
          <ul id="nav-mobile" data-target="mobile-nav" class="sidenav-trigger" class="left hide-on-med-and-down">
            <li><a href="tambah.php" class="waves-effect waves-light btn-large black" style="border-radius: 10%;"><i class="large material-icons">add_circle</i></a></li>
            <li><a href="tambah.php" class="red darken-4">TAMBAH DATA</a>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="logout.php" onclick="return confirm('apakah anda yakin keluar dari halaman admin?')" class="waves-effect waves-light btn-large black">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" style="color: white;">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

  <table cellpadding="11" cellspacing="0" class="responsive-table grey darken-4" style="color: white; ">
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
            <a href="ubah.php?id=<?= $elek['id']; ?>" onclick="return confirm('Ubah Data')" class="waves-effect waves-light btn-small red darken-4">Ubah</a>
            <a href="hapus.php?id=<?= $elek['id']; ?>" onclick="return confirm('Hapus Data')" class="waves-effect waves-light btn-small red darken-4">Hapus</a>
          </td>
          <td><img src="../assets/img/<?= $elek["foto"]; ?>" width="80" class="materialboxed"></td>
          <td><?= $elek["merk"]; ?></td>
          <td><?= $elek["tipe"]; ?></td>
          <td><?= $elek["tahun_rilis"]; ?></td>
          <td>Rp.<?= $elek["harga"]; ?></td>
        </tr>
        <?= $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <script>
    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);
  </script>
</body>

</html>