<?php
	include 'controler/koneksi.php';
	
	$NoIndex = $_POST['NoIndex'];
	$Nama = $_POST['Nama'];
	$Umur = $_POST['Umur'];
	$Tanggal = $_POST['Tanggal'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Status = $_POST['Status'];
	$Alamat = $_POST['Alamat'];
	$JenisPasien = $_POST['JenisPasien'];
	$KategoriUmum = $_POST['KategoriUmum'];
	
	
	$sql = "INSERT INTO registrasiharian (No_Index, Tanggal, Nama, Alamat, Umur, Jenis_Kelamin, Status, Jenis_Pasien, Kategori_Umum)
			VALUES ('$NoIndex', '$Tanggal', '$Nama', '$Alamat', '$Umur',  '$JenisKelamin', '$Status', '$JenisPasien', '$KategoriUmum')";

	if(mysqli_query($con, $sql)) {
		$sqli= mysqli_query($con,"select * from registrasiharian where No_Index='$NoIndex' and Nama='$Nama' and Tanggal='$Tanggal'");
		session_start();
			$row = mysqli_fetch_array($sqli);
			$_SESSION['No_Index'] = $row['No_Index'];
			$_SESSION['Nama'] = $row['Nama'];
			$_SESSION['Tanggal'] = $row['Tanggal'];

		header("location:KeluhanPasien.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
?>
