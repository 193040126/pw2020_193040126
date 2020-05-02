<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040126") or die("Database salah!");

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

//function untuk menambahkan data didalam database
function tambah($data)
{
	$conn = koneksi();

	$foto = htmlspecialchars($data['foto']);
	$merk = htmlspecialchars($data['merk']);
	$tipe = htmlspecialchars($data['tipe']);
	$tahun = htmlspecialchars($data['tahun']);
	$harga = htmlspecialchars($data['harga']);

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
	mysqli_query($conn, "DELETE FROM elektronik where id = $id");

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$foto = htmlspecialchars($data['foto']);
	$merk = htmlspecialchars($data['merk']);
	$tipe = htmlspecialchars($data['tipe']);
	$tahun = htmlspecialchars($data['tahun']);
	$harga = htmlspecialchars($data['harga']);

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
	$query_tambah = "INSERT INTO user VALUES('','$username','$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
