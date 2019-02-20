<?php
	include '../../config/koneksi.php';
	$ID 			= $_POST['id'];
	$category      	= $_POST['category'];
	$product       	= $_POST['product'];
	$price    		= $_POST['price'];
	$status        	= $_POST['status'];
	$date         	= date("Y-m-d");


	$sql = "UPDATE stock SET category = '$category', product = '$product', price='$price', status='$status', date='$date' where id_stock = '$ID'";
	mysqli_query($konek,$sql);
	header('location:../stock.php');
?>