<!DOCTYPE html>
<html>
<head>
<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/ww3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<?php
	
include 'controler/koneksi.php';
session_start();
$No_Index = $_SESSION['No_Index'];
$Tanggal = $_SESSION['Tanggal'];
$Nama = $_SESSION['Nama'];
$Resep_Obat = $_SESSION['Resep_Obat'];

$sql1 = "SELECT * FROM keluhanpasien where No_Index='$No_Index' and Tanggal='$Tanggal'";
$query1 = mysqli_query($con, $sql1);

$sql2 = "SELECT * FROM riwayatberobat where No_Index='$No_Index' and Tanggal='$Tanggal'";
$query2 = mysqli_query($con, $sql2);

if (!$query1) {
	die ('SQL Error: ' . mysqli_error($con));
}
if (!$query2) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
</head>
<body id="myPage" class="w3-sand">

<div class="w3-container w3-white w3-center">
  
  <h1>DOKTER</h1>
  <h2>Selamat Datang</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="DaftarPasien.php">
	Ke Halaman Sebelumnya
  </a></li>
</ul>

<!-- Body -->




<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
	<div class="w3-animate-zoom" style="padding:20px 5%;background-size:cover; width:100%">
	
<div class="w3-cell-row">
  <div class="w3-container w3-cell" style="width:50%">
	<div class="w3-responsive">
    <table class="w3-table w3-bordered w3-border w3-centered w3-hoverable">
        <caption style="text-align: center;"><b><h3>Keluhan Terbaru Pasien</b></h3></caption>
        <tr>
            <th>No Index</th>
            <th>Nama</th>
            <th>Keluhan</th>
        </tr>
<?php
while ($row = mysqli_fetch_array($query1))		
{
	echo '<tr>
			<td>'.$row['No_Index'].'</td>
			<td>'.$NAMA=$row['Nama'].'</td>
			<td>'.$row['Keluhan'].'</td>					
		</tr>';
}
?>
		
    </table>
	</div>
  </div>

  <div class="w3-container w3-cell " style="width:50%">	
	<div class="w3-responsive">  
    <table class="w3-table w3-bordered w3-border w3-centered w3-hoverable"> 
		<caption style="text-align: center;"><b><h3>Resep Obat</b></h3></caption>        
<?php
while ($row = mysqli_fetch_array($query2))		
{
	echo '<tr>
			<td>Hasil Diagnosa: </br>'.$row['Diagnosa'].'</td>
		';
}
?>
			<td>
			<form method="post" action="ProsesSetObat.php" class="w3-container">
			<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%; height: 300px;" type="text" 
			placeholder="Masukkan Resep Obat" name="Resep_Obat" value="<?php echo $Resep_Obat?>" required>
			</td>
			<td>
			<input type="hidden" name="NoIndex" value="<?php echo $No_Index;?>">
			<input type="hidden" name="Nama" value="<?php echo $NAMA;?>">
			<input type="hidden" name="Tanggal" value="<?php echo $Tanggal;?>">
			<input class="w3-btn w3-large w3-white w3-hover-black w3-border" type="submit" name="SET" value="Selesai">
			</td>
		</tr>
    </table>
	</div>
  </div>
</div>

</div>
</div>

<!-- End Body -->

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