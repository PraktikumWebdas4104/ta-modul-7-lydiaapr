<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "db_univ";
	$koneksi = mysqli_connect($server, $username, $password, $db);
	if (!$koneksi) {
		echo "Koneksi Gagal";
	}
?>