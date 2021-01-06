<!DOCTYPE html>
<html>
<head>
<title>SIMANIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view/ww3.css">
<link rel="stylesheet" href="view/mycss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">


<?php
	
include 'controler/koneksi.php';
session_start();
$No_Index = $_SESSION['No_Index'];
$Tanggal = $_SESSION['Tanggal'];
$Nama = $_SESSION['Nama'];

$sql1 = "SELECT * FROM datakesehatanpasien where No_Index='$No_Index'";
$query1 = mysqli_query($con, $sql1);

$sql2 = "SELECT * FROM riwayatberobat where No_Index='$No_Index'";
$query2 = mysqli_query($con, $sql2);

$sql3 = "SELECT * FROM keluhanpasien where No_Index='$No_Index' and Tanggal='$Tanggal'";
$query3 = mysqli_query($con, $sql3);

if (!$query1) {
	die ('SQL Error: ' . mysqli_error($con));
}
if (!$query2) {
	die ('SQL Error: ' . mysqli_error($con));
}
if (!$query3) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
</head>
<body id="myPage" class="w3-sand">

<div class="w3-container w3-white w3-center">
  
  <h1>DOKTER</h1>
  <h2>Selamat Datang</h2>
  <h6 class='w3-wide' style="font-family:'Segoe UI',Arial,sans-serif">Sistem Administrasi Puskesmas Kuin Raya</h6>

</div>

<ul class="navbar w3-card-2 w3-blue">
  <li><a href="DaftarPasien.php">
	Ke Halaman Sebelumnya
  </a></li>
</ul>

<!-- Body -->




<div class="w3-white w3-center w3-card-4" style="max-width:100%"><br>
	<div class="w3-animate-zoom" style="padding:20px 5%;background-size:cover; width:100%">
	
<div class="w3-cell-row">
  <div class="w3-container w3-cell" style="width:60%">
	<div class="w3-responsive">
    <table class="w3-table w3-bordered w3-border w3-centered w3-hoverable empty-cells: hide;">
		<caption style="text-align: center;"><h3><b>Data kesehatan Pasien</b></h3></caption>
        <tr>

        <th>GolDarah</th>
        <th>Riwayat Penyakit Dahulu</th>
        <th>Riwayat Penyakit Keluarga</th>
        <th>Alergi Obat</th>
        <th>lain-lain</th>
        <th>
		<form method="post" action="TambahDataKesehatan.php" class="w3-container">
		<input type="hidden" name="NoIndex" value="<?php echo $No_Index;?>">
		<input type="hidden" name="Nama" value="<?php echo $Nama;?>">
		<input class="w3-btn w3-green w3-hover-black w3-border" type="submit" name="SET" value="+">
		</form>
		</th>
    </tr>
<?php
while ($row = mysqli_fetch_array($query1))		
{
echo '
	<tr>
		<td>&nbsp;'.$row['Gol_Darah'].'</td>
		<td>&nbsp;'.$row['Riwayat_Penyakit_Dahulu'].'</td>
		<td>&nbsp;'.$row['Riwayat_Penyakit_Keluarga'].'</td>
		<td>&nbsp;'.$row['Alergi_Obat'].'</td>
		<td>&nbsp;'.$row['Lain_Lain'].'</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;
		<form method="post" action="'. $_SERVER["PHP_SELF"] .'" class="w3-container">
		<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
		placeholder="Masukkan Gol Darah" name="Gol_Darah" required>
		</td>
		<td>&nbsp;
		<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
		placeholder="Masukkan Riwayat Penyakit Dahulu" name="Riwayat_Penyakit_Dahulu" required>
		</td>
		<td>&nbsp;
		<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
		placeholder="Masukkan Riwayat Penyakit Keluarga" name="Riwayat_Penyakit_Keluarga" required>
		</td>
		<td>&nbsp;
		<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
		placeholder="Masukkan Alergi Obat" name="Alergi_Obat" required>
		</td>	
		<td>&nbsp;
		<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
		placeholder="Masukkan Lain-Lain" name="Lain_Lain" required>
		</td>					
		<td>&nbsp; 
			<input type="hidden" name="NoIndex" value="'.$No_Index.'">
			<input class="w3-btn w3-large w3-white w3-hover-black w3-border" type="submit" name="Update" value="Update"> 
		</form>
		</td>					
	</tr>';
	if (isset($_POST ['Update'])) {
		$No_Index = $_POST["NoIndex"];
		$Gol_Darah = $_POST["Gol_Darah"];
		$Riwayat_Penyakit_Dahulu = $_POST["Riwayat_Penyakit_Dahulu"];
		$Riwayat_Penyakit_Keluarga = $_POST["Riwayat_Penyakit_Keluarga"];
		$Alergi_Obat = $_POST["Alergi_Obat"];
		$Lain_Lain = $_POST["Lain_Lain"];
		$sql1 = "UPDATE datakesehatanpasien SET Gol_Darah='$Gol_Darah', Riwayat_Penyakit_Dahulu='$Riwayat_Penyakit_Dahulu',
		Riwayat_Penyakit_Keluarga='$Riwayat_Penyakit_Keluarga', Alergi_Obat='$Alergi_Obat', Lain_Lain='$Lain_Lain' 
		WHERE No_Index='$No_Index'";
		$query11 = mysqli_query($con, $sql1);
		if (!$query11) {
			die ('SQL Error: ' . mysqli_error($con));
		}
		else{
		header("ProsesMR.php"); }
		};
}
?>
    </table>
	</div>
  </div>

  <div class="w3-container w3-cell" style="width:40%">
	<div class="w3-responsive">
    <table class="w3-table w3-bordered w3-border w3-centered w3-hoverable">
        <caption style="text-align: center;"><b><h3>Keluhan Terbaru Pasien</b></h3></caption>
        <tr>
            <th>No Index</th>
            <th>Nama</th>
            <th>Keluhan</th>
        </tr>
        <?php
while ($row = mysqli_fetch_array($query3))		
{
echo '<tr>
		<td>'.$row['No_Index'].'</td>
		<td>'.$row['Nama'].'</td>
		<td>'.$row['Keluhan'].'</td>					
	</tr>';
}
?>
		
    </table>
	</div>
  </div>
</div>

<div class="w3-cell-row">
  <div class="w3-container w3-cell "style="width:50%">	
	<div class="w3-responsive">
	<table class="w3-table w3-bordered w3-border w3-centered w3-hoverable">
        <caption style="text-align: center;"><b><h3>Riwayat Berobat Pasien Sebelumnya</b></h3></caption>        
		<tr>
        <th>Tanggal</th>
        <th>anamesa/pemeriksaan fisik/diagnosa/therapi.Kii</th>
        <th>B/L/KL</th>    
    </tr>
    <tr>
<?php        
	while ($row = mysqli_fetch_array($query2))		
	{
	echo '<tr>
		<td>'.$row['Tanggal'].'</td>
		<td>'.$row['Diagnosa'].'</td>
		<td>'.$row['Status'].'</td>					
	</tr>';
	}
?>
    </tr>
	<tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
	
    <br><br>
    </table>
	</div>
  </div>

  <div class="w3-container w3-cell " style="width:50%">	
	<div class="w3-responsive">  
    <table class="w3-table w3-bordered w3-border w3-centered w3-hoverable"> 
	</br></br>
		<caption style="text-align: center;"><b><h3>Diagnosa Terbaru & Resep Obat</b></h3></caption>        
        <tr>
            <th>Anamesa/Pemeriksaan Fisik/Diagnosa/Thearpy.Kie</th>
            <th>B/L/KL</th>
            
        </tr>
        <tr>
            <td>
			<form method="post" action="ProsesDiagnosa.php" class="w3-container">
			<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
			placeholder="Masukkan Hasil Diagnosa" name="Diagnosa" required>
			</td>
            <td>
			<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%" type="text" 
			placeholder="Masukkan Status" name="Status" required>
			</td>            
            <td>
			<input type="hidden" name="NoIndex" value="<?php echo $No_Index;?>">
			<input type="hidden" name="Nama" value="<?php echo $Nama;?>">
			<input type="hidden" name="Tanggal" value="<?php echo $Tanggal;?>">
			</td>            
        </tr>
		<tr>
			<td>
			<b><h5>Resep Obat :</b></h5>
			</td>
			<td>
			</td>
		</tr>
		<tr>
            <td>
			<input class="w3-input w3-border w3-margin-bottom w3-center" style="width:100%; height: 300px;" type="text" 
			placeholder="Masukkan Resep Obat" name="Resep_Obat" required>
			</td>
			<td>
			<input class="w3-btn w3-large w3-white w3-hover-black w3-border" type="submit" name="SET" value="Update">
			</form>
			</td>
		</tr>
			
    </table>
	</div>
  </div>
</div>

</div>
</div>

<!-- End Body -->

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