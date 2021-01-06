<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<?php
	
include 'controler/koneksi.php';
session_start();
$_SESSION['Tanggal'];
$Tanggal = $_SESSION['Tanggal'];
$sql = "SELECT * FROM keluhanpasien where Tanggal='$Tanggal'";

$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>

<body id="myPage" class="w3-sand" style="w3-middle">

<div class="w3-container w3-white w3-center">
  
  <h1>DOKTER</h1>
  <h2>Selamat Datang</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="DaftarPasien.php">
	Refresh Data
  </a></li>
</ul>



<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
	<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
	
	<div class="w3-responsive">
	<table class="w3-table w3-bordered w3-centered w3-hoverable">
		<caption><h3><b>Daftar Pasien Hari Ini</b></h3></caption>
		
			<tr>
				<th>Nomor</th>
				<th>NO Index</th>
				<th>Nama Pasien</th>
				<th>Keluhan</th>				
				<th>Action</th>				
			</tr>
		<?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['No_Index'].'</td>
					<td>'.$row['Nama'].'</td>
					<td>'.$row['Keluhan'].'</td>					
					<td class="w3-responsive">
					
					<form method="post" action="'. $_SERVER["PHP_SELF"] .'" class="w3-container">  
					<input type="hidden" name="NoIndex" value="'.$No_Index[$no]=$row['No_Index'].'">
					<input type="hidden" name="Nama" value="'.$Nama[$no]=$row['Nama'].'">
					<input type="hidden" name="Tanggal" value="'.$Tanggal.'">
					<input class="w3-btn w3-xlarge w3-white w3-hover-black w3-border" type="submit" name="Periksa" value="Periksa"> 
					</form>
					
					
					</td>					
				</tr>';
			$no++;
						if (isset($_POST ['Periksa'])) {
						$No_Index = $_POST["NoIndex"];
						$Tanggal = $_POST["Tanggal"];
						$Nama = $_POST["Nama"];
						session_start();
						$_SESSION['No_Index'] = $No_Index;
						$_SESSION['Tanggal'] = $Tanggal;
						$_SESSION['Nama'] = $Nama;
						header("location:MedicalRecord.php");
						};
		}

		?>
		
	</table>
	</div>
	</div>

</div>


<ul class="navbar w3-card-2 w3-blue">
  <li><a href="menu.html">Menuju Halaman Menu</a></li>
</ul>

</body>

<!-- Footer -->
<footer class="w3-container w3-padding-10 w3-white w3-center">
  <h4>Terimakasih</h4>
  <p>&#169; Proyek Perangkat Lunak 2020 </p>			

  <div style="position:relative; bottom:90px; z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-yellow">Kembali Ke Atas</span>   
	<a class="w3-btn w3-yellow w3-border" href="#myPage">
		<span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up" title="Klik">UP</i>
		</span>
	</a>
  </div>				
</footer> 

</html>