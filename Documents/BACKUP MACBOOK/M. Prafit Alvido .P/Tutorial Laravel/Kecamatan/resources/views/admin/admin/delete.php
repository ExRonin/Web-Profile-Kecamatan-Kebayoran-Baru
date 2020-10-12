<?php
include "koneksi.php";
$id=$_GET['id'];

$delete=mysql_query("delete from tb_lapor where id='$id'");

if($delete){
	header('location:tampil_keluhan.php?message="succes"');
}
?>