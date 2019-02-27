<?php
include '../../config/koneksi.php';
$ID 		= $_POST['id'];
$name     	= $_POST['name'];
$email     	= $_POST['email'];
$product    = $_POST['product'];
$desc 		= $_POST['description'];
$date       = date("Y-m-d");
$deadline   = $_POST['deadline'];

$total		="select price from stock where id_stock = $product";
$result		= mysqli_query($konek, $total);
	if(mysqli_num_rows($result)>0){
		while($data = mysqli_fetch_assoc($result)){
			$tot = $data['price'];
			echo $tot;
		}}

	$sql = "UPDATE sale SET name = '$name', email = '$email', product = '$product', description = '$desc', date='$date' price='$tot', deadline='$deadline', where id_sale = '$ID'";
	mysqli_query($konek,$sql);
	header('location:../order.php');
?>