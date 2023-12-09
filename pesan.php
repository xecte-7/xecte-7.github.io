<?php

// Retrieve data request
if(isset($_POST['btnPesan']))
{
	// Retrieve data from Forms
	$dataNama = $_POST['inputNama'];
	$dataNoHP = $_POST['inputNoHP'];
	$dataEmail = $_POST['inputEmail'];
	$dataPesan = $_POST['inputPesan'];
	// DB connection
	$host = "localhost";
	$username = "portal_it";
	$password = "pass123";
	$db_name = "db_portal_it";
	// Create connection
	$con = mysqli_connect($host, $username, $password, $db_name);
	// Check if connected
	if (!$con)
	{
		die("Gagal terhubung ke database!" . mysqli_connect_error());
	}
	$command = "INSERT INTO tb_pesanan (nama_pelanggan, no_hp_pelanggan, email_pelanggan, pesan) VALUES ('$dataNama', '$dataNoHP', '$dataEmail', '$dataPesan')";
	$exec = mysqli_query($con, $command);
	if ($exec)
	{
		echo "Pesanan berhasil dibuat!";
	} else {
		echo "Pesanan gagal dibuat! Perika input data pesanan anda!";
	}
	// Close connection
	mysqli_close($con);
}

?>