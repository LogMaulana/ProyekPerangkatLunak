<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
  
  <h1>Loket</h1>
  <h2>Pendaftaran Pasien</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="IdPasien.php">
	<?php session_start();?>
	Ke Halaman Sebelumnya <?php echo $_SESSION['Nama']?>
  </a></li>
</ul>

<header style="w3-white" class="w3-center">
  <h2><b>Data Diri Pasien</b></h2>
</header>

<section>

<?php
	include 'controler/koneksi.php';
	
	$No_Index = $_POST['No_Index'];
	$Tanggal = $_POST['Tanggal'];
	
	$sql= mysqli_query($con,"select * from datapasien where No_Index='$No_Index'");
	$d = mysqli_fetch_array($sql);
?>

<form action="ProsesRegistrasiHarian.php" method="post" class="w3-container">

	<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
		<table class="w3-table w3-bordered ">
			<tbody>
			<tr>
				<th>No Index</th>			
				<th>
			    <input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan No Index" name="NoIndex" value="<?php echo $d['No_Index'] ?>" required>
				</th>			
				<th>Umur</th>
			    <th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Umur" name="Umur" required>
				</th>
			</tr>
			<tr>
				<th>Tanggal</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Tanggal Hari Ini" name="Tanggal" value="<?php echo $Tanggal ?>" required>
				</th>
				<th>Jenis Kelamin</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Jenis Kelamin" name="JenisKelamin" value="<?php echo $d['Jenis_Kelamin'] ?>" required>
				</th>
			</tr>
			<tr>
				<th>Nama</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Nama Lengkap" name="Nama"  value="<?php echo $d['Nama'] ?>" required>
				</th>
				<th>Status</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Status" name="Status" required>
				</th>
			</tr>
			<tr>
				<th>Alamat</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Tanggal Lahir" name="Alamat" value="<?php echo $d['Alamat'] ?>" required>
				</th>
				<th>Jenis Pasien</th>	
			    <th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Jenis Pasien" name="JenisPasien" required>
				</th>
			</tr>
			<tr>	
				<th style="empty-cells: hide;"></th>
				<th style="empty-cells: hide;"></th>
				<th>Kategori Umum</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Kategori Pasien Umum" name="KategoriUmum" required>
				</th>
			</tr>
			
			</tbody>			
	</table>
	
	<div class="w3-white w3-center w3-card-4" style="max-width:100%">
	<input class="w3-btn w3-xxlarge w3-white w3-hover-black w3-border" 
	type="submit" title="Selanjutnya" name="Selanjutnya"></input>
	</div>

	</div>
</form>

</section>


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