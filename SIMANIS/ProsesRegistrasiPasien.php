<?php
	include 'controler/koneksi.php';
	
	$NoIndex = $_POST['NoIndex'];
	$Nama = $_POST['Nama'];
	$TempatLahir = $_POST['TempatLahir'];
	$TanggalLahir = $_POST['TanggalLahir'];
	$NIK = $_POST['NIK'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Suku = $_POST['Suku'];
	$TelpSeluler = $_POST['TelpSeluler'];
	$Alamat = $_POST['Alamat'];
	$RT = $_POST['RT'];
	$Kelurahan = $_POST['Kelurahan'];
	$TelpRumah = $_POST['TelpRumah'];
	$Pekerjaan = $_POST['Pekerjaan'];
	$AlamatKantor = $_POST['AlamatKantor'];
	$TelpKantor = $_POST['TelpKantor'];
	$JK = $_POST['JK'];
	
	
	$sql = "INSERT INTO datapasien (No_Index, Nama, Tempat_Lahir, Tanggal_Lahir, NIK, Jenis_Kelamin, Suku_Ras, TelpSeluler, Alamat, RT, Kelurahan, 
			TelpRumah, Pekerjaan, Alamat_Kantor, TelpKantor, Jenis_Kepesertaan)
			VALUES ('$NoIndex', '$Nama', '$TempatLahir', '$TanggalLahir', '$NIK', '$JenisKelamin', '$Suku', '$TelpSeluler', '$Alamat', '$RT', 
			'$Kelurahan', '$TelpRumah', '$Pekerjaan', '$AlamatKantor', '$TelpKantor', '$JK')";

	if(mysqli_query($con, $sql)) {
		$sqli= mysqli_query($con,"select * from datapasien where No_Index='$No_Index' or NIK='$NIK'");
		session_start();
			$row = mysqli_fetch_array($sqli);
			$_SESSION['No_Index'] = $row['No_Index'];
		header("location:RegistrasiPasienTerdaftar.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
?>
