<?php
	include 'controler/koneksi.php';
	
	$No_Index = $_POST["NoIndex"];
	$Nama = $_POST["Nama"];
	$Tanggal = $_POST["Tanggal"];
	$Diagnosa = $_POST["Diagnosa"];
	$Status = $_POST["Status"];
	$Resep_Obat = $_POST["Resep_Obat"];
	$sql = "INSERT INTO riwayatberobat (No_Index, Nama, Tanggal, Diagnosa, Status)
	VALUES ('$No_Index', '$Nama', '$Tanggal', '$Diagnosa', '$Status')";
	
	$query1 = mysqli_query($con, $sql);
	if (!$query1) {
		die ('SQL Error: ' . mysqli_error($con));
	}
	else{
	session_start();
	$_SESSION['No_Index'] = $No_Index;
	$_SESSION['Nama'] = $Nama;
	$_SESSION['Tanggal'] = $Tanggal;
	$_SESSION['Diagnosa'] = $Diagnosa;
	$_SESSION['Status'] = $Status;
	$_SESSION['Resep_Obat'] = $Resep_Obat;
	header("location:ProsesMR.php"); }
?>