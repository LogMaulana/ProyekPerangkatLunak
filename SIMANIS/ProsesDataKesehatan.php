<?php
	include 'controler/koneksi.php';
	
	$Tanggal = $_POST["Tanggal"];
	$No_Index = $_POST["No_Index"];
	$Nama = $_POST["Nama"];
	$Gol_Darah = $_POST["Gol_Darah"];
	$Riwayat_Penyakit_Dahulu = $_POST["Riwayat_Penyakit_Dahulu"];
	$Riwayat_Penyakit_Keluarga = $_POST["Riwayat_Penyakit_Keluarga"];
	$Alergi_Obat = $_POST["Alergi_Obat"];
	$Lain_lain = $_POST["Lain_lain"];
	
	$sql = "INSERT INTO datakesehatanpasien (No_Index, Nama, Gol_Darah, Riwayat_Penyakit_Dahulu, 
	Riwayat_Penyakit_Keluarga, Alergi_Obat, Lain_lain)
	VALUES ('$No_Index', '$Nama', '$Gol_Darah', '$Riwayat_Penyakit_Dahulu', '$Riwayat_Penyakit_Keluarga',
	'$Alergi_Obat', '$Lain_lain')";
	
	$query1 = mysqli_query($con, $sql);
	if (!$query1) {
		die ('SQL Error: ' . mysqli_error($con));
	}
	else{
	session_start();
	$_SESSION['No_Index'] = $No_Index;
	$_SESSION['Nama'] = $Nama;
	$_SESSION['Tanggal'] = $Tanggal;
	header("location:MedicalRecord.php"); }
?>