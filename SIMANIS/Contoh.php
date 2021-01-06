<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<body id="myPage" class="w3-sand">

<div class="w3-container w3-white w3-center">
  
  <h1>Selamat Datang</h1>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>
</div>


<ul class="navbar w3-card-2 w3-blue">
  <li><a href="#"></a></li>
</ul>

<div class="w3-card-4 w3-row-padding" style="max-width:600px">
	<h1>Masukkan Tanggal Hari Ini</h1>
	<form class="w3-container" action="ProsesTanggal.php">
		<div class="w3-third">
			<input class="w3-half w3-input w3-border" type="text" placeholder="Hari" name="hari" required>
		</div>
		<div class="w3-third">		
			<input class="w3-half w3-input w3-border" type="text" placeholder="Bulan" name="bulan" required>
		</div>
		<div class="w3-third">
			<input class="w3-half w3-input w3-border" type="text" placeholder="Tahun" name="tahun" required>
		</div>
		<button class="w3-btn w3-block w3-green w3-section w3-padding" type="submit">Masuk</button>	
	</form>
</div>
		
        

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="#"></a></li>
</ul>


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




</body>
</html>