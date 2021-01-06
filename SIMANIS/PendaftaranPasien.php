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
  <h2 style="color:red "><b>Data Pasien Belum Terdaftar</b></h2>
  <h3>Silahkan Daftarkan Diri</h3>
</header>

<section>

<form action="ProsesRegistrasiPasien.php" method="post" class="w3-container">

	<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
		<table class="w3-table w3-bordered ">
		<caption><h2><b>Data Diri Pasien</b></h2></caption>
			<tbody>
			<tr>
				<th>No Index</th>			
				<th>
			    <input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan No Index" name="NoIndex" required>
				</th>			
				<th>Alamat</th>
			    <th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Alamat" name="Alamat" required>
				</th>
			</tr>
			<tr>
				<th>Nama</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Nama Lengkap" name="Nama" required>
				</th>
				<th>RT</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan No RT" name="RT" required>
				</th>
			</tr>
			<tr>
				<th>Tempat Lahir</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Tempat Lahir" name="TempatLahir" required>
				</th>
				<th>Kelurahan</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Nama Kelurahan" name="Kelurahan" required>
				</th>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Tanggal Lahir" name="TanggalLahir" required>
				</th>
				<th>TelpRumah</th>	
			    <th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				name="TelpRumah" value="0" required>
				</th>
			</tr>
			<tr>	
				<th>NIK</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan NIK" name="NIK" required>
				</th>
				<th>Pekerjaan</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Pekerjaan" name="Pekerjaan" required>
				</th>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Jenis Kelamin" name="JenisKelamin" required>
				</th>
				<th>Alamat Kantor</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Alamat Kantor" name="AlamatKantor" required>
				</th>
			</tr>
			<tr>
				<th>Suku/Ras</th>
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Suku/Ras" name="Suku" required>
				</th>
				<th>TelpKantor</th>			
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				name="TelpKantor" value="0" required>
				</th>
			</tr>
			<tr>
				<th>TelpSeluler</th>			
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				name="TelpSeluler" value="0" required>
				</th>
				<th>Jenis Kepesertaan</th>			
				<th>
				<input class="w3-input w3-border w3-margin-bottom" style="width:100%" type="text" 
				placeholder="Masukkan Jenis Kepesertaan" name="JK" required>
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