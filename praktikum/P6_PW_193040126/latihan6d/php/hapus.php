<?php

require 'functions.php';
$id = $_GET['id'];

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus!');
          document.location.href = 'admin.php';
    </script>";
} else {
  echo "<script>
          alert('data gagal dihapus!');
          document.location.href = 'admin.php';
    </script>";
}
