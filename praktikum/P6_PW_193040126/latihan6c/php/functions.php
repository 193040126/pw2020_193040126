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
	}
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
