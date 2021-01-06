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
  <li><a href="IdPasien.php">
	<?php session_start();?>
	Have A Nice Day <?php echo $_SESSION['Nama']?>
  </a></li>
</ul>

<header style="w3-white" class="w3-center">
  <h2>Identifikasi Data Pasien</h2>
</header>

<section>

<form action="ProsesIdPasien.php" method="post" class="w3-container">


  <div class="divkanan" style="padding-left: 200px;">
    <input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" placeholder="Masukkan No Index" name="noindex">
    <input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" placeholder="Masukkan No KTP / NIK" name="nik">
  </div>
  <div class="divkiri">
	
	<input class="w3-btn w3-xxxlarge w3-white w3-hover-black w3-border" type="submit" title="Cari Data" name="cari"><i class="material-icons w3-xxxlarge">search</i></button>
  
  </div>

</form>

</section>


<ul class="navbar w3-card-2 w3-blue w3-center w3-xlarge">
  <div class="w3-animate-zoom" style="padding:10px 30%;background-size:cover; width:100%">
  <li class="w3-white"><a href="RegistrasiBaru.php">
	Registrasi Pasien Baru
  </a></li>
  </div>
</ul>


<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
<table class="w3-table w3-border w3-bordered">
	<caption><h2><b>Daftar Pasien</b></h2></caption>
	<tr>
		<th>No</th>
		<th>No Index</th>
		<th>Nama</th>
		<th>NIK</th>
		<th>Jenis Kelamin</th>
		<th>Jenis Kepesertaan</th>
	</tr>
	<?php 
	$sql = mysqli_query($con,"select * from datapasien");		
	$no = 1;
	while($d = mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['No_Index']; ?></td>
		<td><?php echo $d['Nama']; ?></td>
		<td><?php echo $d['NIK']; ?></td>
		<td><?php echo $d['Jenis_Kelamin']; ?></td>
		<td><?php echo $d['Jenis_Kepesertaan']; ?></td>
	</tr>
	<?php } ?>
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