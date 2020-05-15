<?php
require 'functions.php';

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah!');
          document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
          alert('data gagal diubah!');
          document.location.href = 'admin.php';
    </script>";
  }
}

//ambil data id yang dikirim lewat url
$id = $_GET['id'];

//query data elektronik berdasarkan url
$elek = query("SELECT * FROM elektronik WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="../css/ubah.css">

  <title>Ubah Data</title>
</head>

<body style="background-image: url(../assets/img/bg5.jpg);">

  <!-- navbar -->
  <div class="navbar">
    <nav class="red darken-4">
      <div class="container" style="height: 150px;">
        <div class="nav-wrapper">
          <ul id="nav-mobile" data-target="mobile-nav" class="sidenav-trigger" class="center hide-on-med-and-down">
            <li class="red darken-4">Form Ubah Data Elektronik</li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="admin.php" class="waves-effect waves-light btn-large black">KEMBALI</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="admin.php">KEMBALI</a></li>
  </ul>

  <form action="" method="POST" enctype="multipart/form-data" style="width: 500px; height: 700px; border: 3px solid white;" class="responsive-table grey darken-4">
    <input type="hidden" name="id" id="id" value="<?= $elek["id"]; ?>">
    <ul>
      <li>
        <input type="hidden" name="foto_lama" value="<?= $elek['foto']; ?>">
        <label for="foto">FOTO </label> <br>
        <input type="file" name="foto" class="foto" onchange="previewImage()" id="foto" placeholder="FOTO" autofocus autocomplete="off" style="color: red;"><br><br>
        <img src="../assets/img/<?= $elek['foto']; ?>" width="120" style="display: block;" class="img-preview">
        <br>
      </li>
      <li>
        <label for="merk">Merk </label> <br>
        <input type="text" name="merk" id="merk" required style="color: red;" placeholder="MERK" value="<?= $elek["merk"]; ?>"><br><br>
      </li>
      <li>
        <label for="tipe">Tipe :</label> <br>
        <input type="text" name="tipe" id="tipe" required style="color: red;" placeholder="TIPE" value="<?= $elek["tipe"]; ?>"><br><br>
      </li>
      <li>
        <label for="tahun">Tahun Rilis :</label> <br>
        <input type="number" name="tahun" id="tahun" required style="color: red;" placeholder="TAHUN RILI" value="<?= $elek["tahun_rilis"]; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label> <br>
        <input type="number" name="harga" id="harga" required style="color: red;" placeholder="HARGA" value="<?= $elek["harga"]; ?>"><br><br>
      </li>
      <br>

      <p style="margin: auto; margin-left: 170px;"><button class="btn waves-effect waves-light red accent-4 center" type="submit" name="ubah">Ubah Data<i class="material-icons right">send</i>
        </button>
      </p>

    </ul>
  </form>

  <!-- footer -->
  <footer class="red darken-4 white-text center">
    <p>Diva Amwal Maulana Supian. Copyright 2020.</p>
  </footer>

  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
</body>

</html>