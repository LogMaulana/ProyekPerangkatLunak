<?php
	include 'controler/koneksi.php';
	
	$No_Index = $_POST["NoIndex"];
	$Nama = $_POST["Nama"];
	$Tanggal = $_POST["Tanggal"];
	$Resep_Obat = $_POST["Resep_Obat"];
	$sql = "INSERT INTO riwayatobat (No_Index, Nama, Tanggal, Keperluan)
	VALUES ('$No_Index', '$Nama', '$Tanggal', '$Resep_Obat')";
	
	$query1 = mysqli_query($con, $sql);
	if (!$query1) {
		die ('SQL Error: ' . mysqli_error($con));
	}
	else{
	header("location:DaftarPasien.php"); }
?>