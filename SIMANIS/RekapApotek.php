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
  
  <h1>APOTEK</h1>
  <h2>Daftar Obat</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="apotek.php">
	Have A Nice Day
  </a></li>
</ul>

<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
	<div class="w3-animate-zoom" style="padding:20px 5%;background-size:cover; width:100%">


<div  style="padding:20px 10%;background-size:cover; width:100%">
<table class="w3-table w3-border w3-bordered" style="table-layout: auto; empty-cells: hide;">	
	<tr>
		<th><h2><b>Daftar Obat</b></h2></th>
	</tr>
</table>

<table class="w3-table w3-border w3-bordered w3-center">	
	<tr>
		<th>No</th>
		<th>Nama Obat</th>
		<th>Jumlah</th>
	</tr>
	
<?php 
	$no = 1;
	$data = mysqli_query($con,"select * from daftarobat");
	while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['Nama_Obat']; ?></td>
			<td><?php echo $d['Jumlah']; ?></td>
			
		<?php
		}
	?>
		</tr>
</table>
<table class="w3-table w3-border w3-bordered w3-center empty-cells: hide;">	
	<tr>
		<td>
		<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name"btnLogin">
		<a href="#"></a>
		Refresh</button>
		</td>
		<td>
		</td>
		<td>
		</td>
		
		<td>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="w3-container">  
			<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" id="ID">
			<input class="w3-btn w3-block w3-green w3-section w3-padding w3-hover-black w3-border" 
			type="submit" name="Set" value="Lihat Antrian Obat Pasien"> 
		</form>
			<?php
			$tanggal = "";

			if (isset($_POST ['Set'])) {
				$tanggal = $_POST["tanggal"];
				session_start();
				$_SESSION['Tanggal'] = $tanggal;
				header("location:AntrianObat.php");
			}
			?>
		</td>
	</tr>
</table>
</div>
</div>
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