<?php
	include 'controler/koneksi.php';
	
		$No_Index = $_POST['noindex'];
		$NIK = $_POST['nik'];
		
		$sql= mysqli_query($con,"select * from datapasien where No_Index='$No_Index' or NIK='$NIK'");
		
		$cek = mysqli_num_rows($sql);
		if($cek>0){
			session_start();
			$row = mysqli_fetch_array($sql);
			$_SESSION['No_Index'] = $row['No_Index'];
			header("location:RegistrasiPasienTerdaftar.php");
		}
		else{
			header("location:PendaftaranPasien.php");
		}
	
?>
