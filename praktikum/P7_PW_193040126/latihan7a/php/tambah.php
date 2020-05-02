<?php
require 'functions.php';

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 7a</title>
</head>

<body>
  <h3>Form Tambah Data Elektronik</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="foto">Gambar :</label> <br>
        <input type="text" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label> <br>
        <input type="text" name="merk" id="merk" required><br><br>
      </li>
      <li>
        <label for="tipe">Tipe :</label> <br>
        <input type="text" name="tipe" id="tipe" required><br><br>
      </li>
      <li>
        <label for="tahun">Tahun Rilis :</label> <br>
        <input type="number" name="tahun" id="tahun" required><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label> <br>
        <input type="number" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
      <button type="submit">
        <a href="../index.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>