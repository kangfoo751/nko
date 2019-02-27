<?php
include 'koneksi.php';
$name     	= $_POST['name'];
$email     	= $_POST['email'];
$pass    = $_POST['password'];


$sql = "insert into member (namembr, emailmbr, passmbr) values ('$name', '$email', '$pass')";

mysqli_query($konek,$sql);
header('location:../script/product.php');
?>
