<?php
	include 'controler/koneksi.php';
	
	$NoIndex = $_POST['noindex'];
	$Nama = $_POST['nama'];
	$Perihal = $_POST['perihal'];
	$Biaya = $_POST['biaya'];
	
	$sql = "INSERT INTO tabelkasir (No_Index, Nama, Perihal, Biaya)
			VALUES ('$NoIndex', '$Nama', '$Perihal', '$Biaya')";

	if(mysqli_query($con, $sql)) {
		header("location:RekapKasir.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

?>