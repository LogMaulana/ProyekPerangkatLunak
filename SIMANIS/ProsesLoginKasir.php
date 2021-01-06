<?php
	include 'controler/koneksi.php';
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql= mysqli_query($con,"select * from login where Username='$username' and Password='$password'");
		
		$cek = mysqli_num_rows($sql);
		if($cek>0){
			session_start();
			$row = mysqli_fetch_array($sql);
			$_SESSION['Nama'] = $row['Nama'];
			header("location:RekapKasir.php");
		}
		else{
			header("location:loginKasir.php");
		}
	
?>
