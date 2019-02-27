<?php
include '../../config/koneksi.php';

$name     	= $_POST['name'];
$email     	= $_POST['email'];
$product    = $_POST['product'];
$desc 		= $_POST['description'];
$date       = date("Y-m-d");;
$deadline   = $_POST['deadline'];

$total		="select price from stock where id_stock = $product";
$result		= mysqli_query($konek, $total);
	if(mysqli_num_rows($result)>0){
		while($data = mysqli_fetch_assoc($result)){
			$tot = $data['price'];
			echo $tot;
		}}
                            
$sql = "insert into sale (name, email, product, description, date, price, deadline) values ('$name', '$email', '$product', '$desc','$date','$tot', '$deadline')";

mysqli_query($konek,$sql);
header('location:../product.php');
?>
