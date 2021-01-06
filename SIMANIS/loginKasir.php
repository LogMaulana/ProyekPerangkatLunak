<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<body id="myPage" class="w3-sand" style="w3-middle">

<div class="w3-container w3-white w3-center">
  
  <h1>Kasir</h1>
  <h2>Selamat Datang</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="#"></a></li>
</ul>

	<div class="w3-white w3-center w3-card-4" style="max-width:50%"><br>
		<img src="img/bg-menu.png" alt="Avatar" style="width:15%" class="w3-circle w3-margin-top">
		<form action="ProsesLoginKasir.php" method="post" class="w3-container">
		<div class="w3-section">
			<label><b>Username</b></label>
			<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" placeholder="Enter Username" name="username" required>
			<label><b>Password</b></label>
			<input class="w3-input w3-border" style="width:100%" type="password" placeholder="Enter Password" name="password" required>
			<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name"btnLogin">Login</button>  
		</div>
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