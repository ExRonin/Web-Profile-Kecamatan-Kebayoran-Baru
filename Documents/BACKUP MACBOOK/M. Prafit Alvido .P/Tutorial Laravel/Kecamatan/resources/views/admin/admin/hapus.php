<?php
include"koneksi.php";

	$data = mysqli_query ($koneksi, " select *
									  from 
									  file 
									  where id_file = $_GET[id]");
	$row = mysqli_fetch_array ($data);
						

     unlink("file/$row[nama_file]");   
	$query = "DELETE FROM file 
							WHERE id_file ='$_GET[id]'
								";
mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');
?>


