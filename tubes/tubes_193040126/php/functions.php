<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "pw19126", "d19i30v40a126") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "pw19126_tubes_193040126") or die("Database salah!");

	return $conn;
}

//function untuk melakukakan query ke database
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	};
	return $rows;
}

//function upload gambar
function upload()
{
	$nama_file = $_FILES['foto']['name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp_file = $_FILES['foto']['tmp_name'];

	//KETIKA TIDAK ADA GAMBAR YANG DIPILIH
	if ($error == 4) {
		// echo "<script>
		// 		alert('pilih gambar terlebih dahulu');
		// 	 </script>";

		return 'nophoto.jpg';
	}

	//cek extension file
	$daftar_foto = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_foto)) {
		echo "<script>
				alert('yang anda pilih bukan gambar');
			 </script>";

		return false;
	}

	//CEK TIPE FILE
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {

		echo "<script>
				alert('yang anda pilih bukan gambar');
			 </script>";

		return false;
	}

	//cek ukuran file
	//maksimal 5mb = 5000000

	if ($ukuran_file > 5000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			 </script>";

		return false;
	}

	//jika lolos pengecekan
	//siap untuk upload
	//generate nama foto
	$nama_file_baru = uniqid();
	$nama_file_baru .=  '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}

//function untuk menambahkan data didalam database
function tambah($data)
{
	$conn = koneksi();

	//$foto = htmlspecialchars($data['foto']);
	$merk = htmlspecialchars($data['merk']);
	$tipe = htmlspecialchars($data['tipe']);
	$tahun = htmlspecialchars($data['tahun']);
	$harga = htmlspecialchars($data['harga']);

	//UPLOAD GAMBAR
	$foto = upload();
	if (!$foto) {
		return false;
	}

	$query = "INSERT INTO elektronik VALUES
						(null, '$foto', '$merk', '$tipe', '$tahun', '$harga')";

	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

//function untuk menghapus data didalam database
function hapus($id)
{
	$conn = koneksi();

	//menghapus foto didalam folder img
	$elek = query("SELECT * FROM elektronik WHERE id = $id");
	if ($elek[0]['foto'] != 'nophoto.jpg') {
		unlink('../assets/img/' . $elek[0]['foto']);
	}

	mysqli_query($conn, "DELETE FROM elektronik where id = $id") or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$foto_lama = htmlspecialchars($data['foto_lama']);
	$merk = htmlspecialchars($data['merk']);
	$tipe = htmlspecialchars($data['tipe']);
	$tahun = htmlspecialchars($data['tahun']);
	$harga = htmlspecialchars($data['harga']);

	$foto = upload();
	if (!$foto) {
		return false;
	}

	if ($foto == 'nophoto.jpg') {
		$foto = $foto_lama;
	}

	$queryubah = "UPDATE elektronik SET 
						foto = '$foto',
						merk = '$merk',
						tipe = '$tipe',
						tahun_rilis = '$tahun',
						harga = '$harga'
						WHERE id = '$id'
						";

	mysqli_query($conn, $queryubah);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}
function cari($keyword)
{
	$query = "SELECT * FROM elektronik
						WHERE
						merk LIKE '%$keyword%' OR
						tipe LIKE '%$keyword%' OR
						tahun_rilis LIKE '%$keyword%'
						";

	return query($query);
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('Username sudah digunakan!');
					</script>";
		return false;
	}


	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
						alert('konfirmasi password tidak sesuai!');
					</script>";

		return false;
	}



	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambah user baru ke database
	$query_tambah = "INSERT INTO user VALUES (null,'$username','$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
