<?php
	include "controler/koneksi.php";
		$hari 	= $_POST['hari'];
		$bulan 	= $_POST['bulan'];
		$tahun 	= $_POST['tahun'];
		
		$sql = "INSERT INTO tanggal(Hari, Bulan, Tahun) VALUES ( '$hari','$bulan','$tahun')";
		
		if (mysqli_query($con, $sql))
		{
			echo "New record created successfully";
			header("location:homeKasir.php");
		}
		else {
		header("location:Contoh.php");
		}
?>
