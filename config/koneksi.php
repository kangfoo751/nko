<?php 
$server = "localhost";
$user = "root";
$pass = "123";
$db = "nko";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('koneksi gagal '.mysqli_connect_error());
}
?>