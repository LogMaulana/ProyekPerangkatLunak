<!DOCTYPE html>
<html>

<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/w3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<?php
	
include 'controler/koneksi.php';

$sql = 'SELECT * FROM tabelkasir';

$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>

<body id="myPage" class="w3-sand" style="w3-middle">

<div class="w3-container w3-white w3-center">
  
  <h1>Kasir</h1>
  <h2>Selamat Datang</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="RekapKasir.php">
	<?php session_start();?>
	Have A Nice Day <?php echo $_SESSION['Nama']; ?>
  </a></li>
</ul>

<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
	<div class="w3-animate-zoom" style="padding:20px 10%;background-size:cover; width:100%">
	<table class="w3-table">
		<caption><h3><b>Rekap Kasir Hari Ini</b></h3></caption>
		<thead>
			<tr>
				<th>Nomor</th>
				<th>NO Index</th>
				<th>Nama Pasien</th>
				<th>Perihal</th>
				<th>Biaya</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$Biaya  = $row['Biaya'] == 0 ? '' : number_format($row['Biaya'], 0, ',', '.');
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['No_Index'].'</td>
					<td>'.$row['Nama'].'</td>
					<td>'.$row['Perihal'].'</td>
					<td>'.$Biaya.'</td>
				</tr>';
			$total += $row['Biaya'];
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">TOTAL</th>
				<th><?=number_format($total, 0, ',', '.')?></th>
			</tr>
		</tfoot>
	</table>
	</div>


</div>

<div class="w3-white w3-center w3-card-4" style="max-width:100%">
	<button class="w3-btn w3-xlarge w3-white w3-hover-black"><a href="homeKasir.php">Tambah Data</button>
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