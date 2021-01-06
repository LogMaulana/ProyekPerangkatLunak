<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<body id="myPage" class="w3-sand">

<div class="w3-container w3-white w3-center">
  
  <h1>Menu Utama</h1>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>
</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="RekapKasir.php">
	<?php session_start();?>
	Have A Nice Day <?php echo $_SESSION['Nama']?>
  </a></li>
</ul>

<div class="w3-row-padding">
<div class="w3-half">
	<div class="w3-white w3-card-4" style="max-width:100%"><br>
		<form action="ProsesKasir.php" method="post" class="w3-container">
		<div class="w3-section">
			<label><b>Nomor Index Pasien</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" placeholder="Masukkan Nomor Index" name="noindex" required>
			<label><b>Nama</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" placeholder="Masukkan Nama" name="nama" required>
			<label><b>Perihal</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" placeholder="Masukkan Perihal" name="perihal" required>
			<label><b>Biaya</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" placeholder="Masukkan Biaya" name="biaya" required>
			
			
			<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="proses">Proses</button>  
		</div>
		</form>
	</div>
</div>

<div class="w3-half">
	<div class="w3-white w3-card-4" style="max-width:100%"><br>
		<form action="ProsesDataKasir.php" method="post" class="w3-container">
		<div class="w3-section">
			
<?php
			
	$NoIndex = $_POST['noindex'];
	$Nama = $_POST['nama'];
	$Perihal = $_POST['perihal'];
	$Biaya = $_POST['biaya']; 
	
?>

			<label><b>Nomor Index Pasien</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" value="<?php echo $NoIndex?>" name="noindex" required>
			<label><b>Nama</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" value="<?php echo $Nama?>" name="nama" required>
			<label><b>Perihal</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" value="<?php echo $Perihal?>" name="perihal" required>
			<label><b>Biaya</b></label>
			<input class="w3-input w3-border" style="width:100%" type="text" value="<?php echo $Biaya?>" name="biaya" required>  
		
			<button class="w3-button w3-block w3-yellow w3-section w3-padding" type="submit" name="Cetak">Cetak</button>  
			
		</div>
		</form>
	</div>
</div>


</div>

 
<ul class="navbar w3-card-2 w3-blue">
  <li><a href="index.html">Menuju Halaman Utama</a></li>
</ul>


<!-- Footer -->
<footer class="w3-container w3-padding-10 w3-white w3-center">
  <h4>Terimakasih</h4>
  <p>&#169; Proyek Perangkat Lunak 2020</p>			

  <div style="position:relative; bottom:90px; z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-yellow">Kembali Ke Atas</span>   
	<a class="w3-btn w3-yellow w3-border" href="#myPage">
		<span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up" title="Klik">UP</i>
		</span>
	</a>
  </div>				
</footer>       




</body>
</html>