<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Laporan</title>
</head>
<body>
<button onclick="cetak()">Cetak</button>
<table border="2" width="1200">
	<tr>
		<td bgcolor="skyblue">Jenis Laporan</td>
		<td bgcolor="skyblue">Nama Pelapor</td>
		<td bgcolor="skyblue">Email Pelapor</td>
		<td bgcolor="skyblue">Alamat</td>
		<td bgcolor="skyblue">Kota</td>
		<td bgcolor="skyblue">Laporan</td>
		<td bgcolor="skyblue">ACTION</td>
	</tr>
<?php
$tampil_keluhan=mysql_query("select * from tb_lapor");
if($tampil_keluhan=== FALSE) { 
die(mysql_error()); 
}
while ($array=mysql_fetch_array($tampil_keluhan))
 {
?>
	<tr>
		<td><?php echo $array['jenis_laporan']?></td>
		<td><?php echo $array['nama_pelapor']?></td>
		<td><?php echo $array['email_pelapor']?></td>
		<td><?php echo $array['alamat']?></td>
		<td><?php echo $array['kota']?></td>
		<td><?php echo $array['laporan']?></td>
		<td><a href="delete.php?id=<?php echo $array['id'];?>">Delete</a></td>
		<td><a href="index.php?id=<?php echo $array['id'];?>">Back</a></td>
	</tr>
	
<?php
}
?>
</table>
<script type="text/javascript">
function cetak(){
	window.print();
}
</script>
</body>
</html>