<?php
require 'functions.php';

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
  <title>latihan 7b</title>
</head>

<body>
  <h3>Form Ubah Data Elektronik</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $elek["id"]; ?>">
    <ul>
      <li>
        <label for="foto">Gambar :</label> <br>
        <input type="text" name="foto" id="foto" required value="<?= $elek["foto"]; ?>"><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label> <br>
        <input type="text" name="merk" id="merk" required value="<?= $elek["merk"]; ?>"><br><br>
      </li>
      <li>
        <label for="tipe">Tipe :</label> <br>
        <input type="text" name="tipe" id="tipe" required value="<?= $elek["tipe"]; ?>"><br><br>
      </li>
      <li>
        <label for="tahun">Tahun Rilis :</label> <br>
        <input type="number" name="tahun" id="tahun" required value="<?= $elek["tahun_rilis"]; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label> <br>
        <input type="number" name="harga" id="harga" required value="<?= $elek["harga"]; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah" id="id">Ubah Data</button>
      <button type="submit">
        <a href="admin.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>