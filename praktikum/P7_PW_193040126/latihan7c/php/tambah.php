<?php
require 'functions.php';

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
          alert('data gagal ditambahkan!');
          document.location.href = 'admin.php';
    </script>";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="../css/tambah.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 7c</title>
</head>

<body style="background-image: url(../assets/img/bg5.jpg);">

  <!-- navbar -->
  <div class="navbar">
    <nav class="red darken-4">
      <div class="container" style="height: 150px;">
        <div class="nav-wrapper">
          <ul id="nav-mobile" data-target="mobile-nav" class="sidenav-trigger" class="center hide-on-med-and-down">
            <li class="red darken-4">FORM TAMBAH DATA ELEKTRONIK</li>
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

  <form action="" method="POST" style="width: 500px; height: 600px; border: 3px solid white;" class="responsive-table grey darken-4">
    <ul>
      <li>
        <label for="foto"></label> <br>
        <input type="text" name="foto" id="foto" placeholder="GAMBAR" autofocus autocomplete="off" required style="color: red;"><br><br>
      </li>
      <li>
        <label for="merk"></label> <br>
        <input type="text" name="merk" id="merk" placeholder="MERK" autofocus autocomplete="off" required style="color: red;"><br><br>
      </li>
      <li>
        <label for="tipe"></label> <br>
        <input type="text" name="tipe" id="tipe" placeholder="TIPE" autofocus autocomplete="off" required style="color: red;"><br><br>
      </li>
      <li>
        <label for="tahun"></label> <br>
        <input type="number" name="tahun" id="tahun" placeholder="TAHUN RILIS" autofocus autocomplete="off" required style="color: red;"><br><br>
      </li>
      <li>
        <label for="harga"></label> <br>
        <input type="number" name="harga" id="harga" placeholder="HARGA" autofocus autocomplete="off" required style="color: red;"><br><br>
      </li>
      <br>

      <p style="margin: auto; margin-left: 170px;"><button class="btn waves-effect waves-light red accent-4 center" type="submit" name="tambah">Tambah Data<i class="material-icons right">send</i>
        </button>
      </p>

    </ul>
  </form>

  <!-- footer -->
  <footer class="red darken-4 white-text center">
    <p>Diva Amwal Maulana Supian. Copyright 2020.</p>
  </footer>

  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  </script>
</body>

</html>