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
	}
	return $rows;
}
