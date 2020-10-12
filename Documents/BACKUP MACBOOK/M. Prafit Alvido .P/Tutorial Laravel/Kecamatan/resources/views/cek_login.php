
<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
session_start();
$login = mysql_query("select * from user where username='$username' and password='$password'");
if (mysql_num_rows($login) > 0){
$_SESSION['username'] = $username;
header("location:form_lapor.php");
}else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}
?>


