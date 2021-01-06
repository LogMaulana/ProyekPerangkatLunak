<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<body id="myPage" class="w3-sand">

<div class="w3-container w3-white w3-center">
  
  <h1>Dokter</h1>
  <h2>Sincronize Data</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>
</div>
<ul class="navbar w3-card-2 w3-blue">
  <li><a href="RekapKasir.php">
	<?php session_start();?>
	Have A Nice Day <?php echo $_SESSION['Nama']; ?>
  </a></li>
</ul>	

	

<center>
  <div class="w3-display-container" style="width:30%;">
		<img src="img/bg-menu.png" alt="Loket" style="width:100%">
		<div class="w3-display-middle w3-display-hover">
		
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="w3-container">  
			<input class="w3-input w3-border w3-margin-bottom w3-center w3-xlarge" style="width:100%" type="text"type="text" name="tanggal" value="<?php echo date("Y-m-d"); ?>" id="ID"> <br/><br/>
			<input class="w3-btn w3-xlarge w3-white w3-hover-black w3-border" type="submit" name="Set" value="SET"> 
		</form>
			<?php
			$tanggal = "";

			if (isset($_POST ['Set'])) {
				$tanggal = $_POST["tanggal"];
				session_start();
				$_SESSION['Tanggal'] = $tanggal;
				header("location:DaftarPasien.php");
			}
			?>
		
		</div>
  </div>
</center>

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