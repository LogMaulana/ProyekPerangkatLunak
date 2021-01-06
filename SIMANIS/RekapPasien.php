<!DOCTYPE html>
<html>
<head>
<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php 
	include 'controler/koneksi.php';
?>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Create two columns/boxes that floats next to each other */
.divkanan {
  float: left;
  width: 70%;
  height: auto;
  padding: 20px;
}

.divkiri {
  float: left;
  padding: 20px;
  width: 30%;
  height: auto;
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

}
</style>
</head>
<body>


<div class="w3-container w3-white w3-center">
  
  <h1>LOKET</h1>
  <h2>Identifikasi Pasien</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="RekapPasien.php">
	Have A Nice Day
  </a></li>
</ul>

<ul class="navbar w3-card-2 w3-blue w3-center w3-xlarge">
  <div class="w3-animate-zoom" style="padding:10px 30%;background-size:cover; width:100%">
  <li class="w3-white"><a href="IdPasien.php">
	Identifikasi Pasien
  </a></li>
  </div>
</ul>

<div  style="padding:20px 10%;background-size:cover; width:100%">
<table class="w3-table w3-border w3-bordered" style="table-layout: auto; empty-cells: hide;">	
	<tr>
		<th><h2><b>Daftar Pasien</b></h2></th>	
		<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		<th>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="w3-container">  
			<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
			<input class="w3-btn w3-xlarge w3-white w3-hover-black w3-border" type="submit" name="Set" value="Tampilkan Data Hari Ini"> 
			</form>
			<?php
			$tanggal = "";

			if (isset($_POST ['Set'])) {
				$tanggal = $_POST["tanggal"];				
			}
			?>
		</th>
		<th>
		<form action="RekapPasien.php" method="post" class="w3-container">
		<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
		placeholder="Masukkan Tanggal" name="Tanggal">
		</th>
		<th>
		<input class="w3-btn w3-xlarge w3-white w3-hover-black w3-border" 
		type="submit" title="Cari List" name="Cari" value="Cari"></input>
		</th>
		</form>
	</tr>
</table>

<table class="w3-table w3-border w3-bordered">	
	<tr>
		<th>No</th>
		<th>No Index</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Keluhan</th>
	</tr>
	
	
	<?php 
	$sql= mysqli_query($con,"select * from keluhanpasien where Tanggal='$tanggal'");		
	$no = 1;
	while($d = mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['No_Index']; ?></td>
		<td><?php echo $d['Nama']; ?></td>
		<td><?php echo $d['Tanggal']; ?></td>
		<td><?php echo $d['Keluhan']; ?></td>
	</tr>
	<?php } ?>
	
	<?php 
	if(isset($_POST ['Cari'])) {
	$Tanggal = $_POST['Tanggal'];
	$sql= mysqli_query($con,"select * from keluhanpasien where Tanggal='$Tanggal'");		
	$no = 1;
	while($d = mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['No_Index']; ?></td>
		<td><?php echo $d['Nama']; ?></td>
		<td><?php echo $d['Tanggal']; ?></td>
		<td><?php echo $d['Keluhan']; ?></td>
	</tr>
	<?php }} ?>
	
	
</table>
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