<?php
	include 'controler/koneksi.php';
	
	$NoIndex = $_POST['NoIndex'];
	$Nama = $_POST['Nama'];
	$Tanggal = $_POST['Tanggal'];
	$Keluhan = $_POST['Keluhan'];
	
	$sql = "INSERT INTO keluhanpasien (No_Index, Nama, Tanggal, Keluhan)
			VALUES ('$NoIndex', '$Nama', '$Tanggal', '$Keluhan')";

	if(mysqli_query($con, $sql)) {
		$sqli= mysqli_query($con,"select * from keluhanpasien where No_Index='$NoIndex'");
		session_start();
			$row = mysqli_fetch_array($sqli);
			$_SESSION['No_Index'] = $row['No_Index'];
			$_SESSION['Nama'] = $row['Nama'];
			$_SESSION['Tanggal'] = $row['Tanggal'];

		header("location:RekapPasien.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
?>
