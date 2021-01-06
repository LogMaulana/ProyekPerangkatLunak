<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<?php
	
include 'controler/koneksi.php';

$sql = 'SELECT * FROM datapasien';

$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
session_start();
$_SESSION['No_Index']; $proses=$_SESSION['No_Index'];
?>

<body id="myPage" class="w3-sand" style="w3-middle">

<div class="w3-container w3-white w3-center">
  
  <h1>LOKET</h1>
  <h2>Data Pasien</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="IdPasien.php">
	Ke Halaman Sebelumnya
  </a></li>
</ul>

<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
<?php	
	$sql= mysqli_query($con,"select * from datapasien where No_Index='$proses'");

	$d = mysqli_fetch_array($sql);
		
	echo '
		<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
		<table class="w3-table w3-bordered ">
		<caption><h2><b>Data Pasien "'.$d['Nama'].'"</b></h2></caption>
			<tbody>
			<tr>
				<th>No Index</th>				
				<td>'.$d['No_Index'].'</td>
				<th>Alamat</th>
				<td>'.$d['Alamat'].'</td>
			</tr>
			<tr>
				<th>Nama</th>				
				<td>'.$d['Nama'].'</td>
				<th>RT</th>				
				<td>'.$d['RT'].'</td>
			</tr>
			<tr>
				<th>Tempat Lahir</th>		
				<td>'.$d['Tempat_Lahir'].'</td>
				<th>Kelurahan</th>				
				<td>'.$d['Kelurahan'].'</td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>				
				<td>'.$d['Tanggal_Lahir'].'</td>
				<th>TelpRumah</th>				
				<td>'.$d['TelpRumah'].'</td>	
			</tr>
			<tr>	
				<th>NIK</th>			
				<td>'.$d['NIK'].'</td>
				<th>Pekerjaan</th>				
				<td>'.$d['Pekerjaan'].'</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>				
				<td>'.$d['Jenis_Kelamin'].'</td>
				<th>Alamat Kantor</th>							
				<td>'.$d['Alamat_Kantor'].'</td>
			</tr>
			<tr>
				<th>Suku/Ras</th>			
				<td>'.$d['Suku_Ras'].'</td>				
				<th>TelpKantor</th>				
				<td>'.$d['TelpKantor'].'</td>
			</tr>
			<tr>
				<th>TelpSeluler</th>				
				<td>'.$d['TelpSeluler'].'</td>
				<th>Jenis Kepesertaan</th>				
				<td>'.$d['Jenis_Kepesertaan'].'</td>
			</tr>
			</tbody>
	</table>
	</div>
			
	';			
?>
</div>

<div class="w3-white w3-center w3-card-4" style="max-width:100%">
	<form action="RegistrasiHarian.php" method="post">
	
	<input style="width:100%" type="text" hidden
	name="No_Index" value="<?php echo $proses ?>" hidden>
	
	<input type="text" name="Tanggal" value="<?php echo $Tanggal=date("Y-m-d"); ?>" hidden>
	
	<input class="w3-btn w3-xxlarge w3-white w3-hover-black w3-border" 
	type="submit" title="Selanjutnya" name="Selanjutnya" value="Selanjutnya">
	</form>
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