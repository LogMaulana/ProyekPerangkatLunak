<html>

<body>
<?php
//file name koneksi.php

	$server="localhost";
	$username="root";
	$password="";
	$db_name="simanis";
	$con = mysqli_connect($server,$username,$password,$db_name);
	
	if(mysqli_connect_errno()){
		echo "Failed to Connect to MYSQL: ". mysqli_connect_errno();
	}
	else
		echo "Successfully To Connnected MySQL Server";
?>
</body>
</html>