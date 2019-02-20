<?php
include '../../config/koneksi.php';
$category      = $_POST['category'];
$product        = $_POST['product'];
$price    		= $_POST['price'];
$status         = $_POST['status'];
$date 			= date("Y-m-d");

$sql = "insert into stock (category, product, price, status, date) values ('$category', '$product','$price','$status', '$date')";
mysqli_query($konek,$sql);
header('location:../stock.php');
?>
