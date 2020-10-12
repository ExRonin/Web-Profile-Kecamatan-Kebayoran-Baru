 <?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("kecamatan") or die ("Database Tidak Ditemukan");
?>
<?php 
$koneksi = mysqli_connect("localhost","root","","kecamatan");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>