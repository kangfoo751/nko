<?php
include 'koneksi.php';
$name     	= $_POST['name'];
$email     	= $_POST['email'];
$pass    = $_POST['password'];
$role	= "1";


$sql = "insert into member (namembr, emailmbr, passmbr, role) values ('$name', '$email', '$pass', '$role')";

mysqli_query($konek,$sql);
header('location:../script/order.php');
?>
