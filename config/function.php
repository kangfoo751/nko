<?php
include 'koneksi.php';

function category($id){
	global $konek;
	$sql = "SELECT * FROM category WHERE id_category=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['name'];
}
function status($id){
	if ($id == "1") {
		return "Available";
	}else{
		return "Sold Out";
	}
}

function product($id){
	global $konek;
	$sql = "SELECT * FROM stock WHERE id_stock=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['product'];
}
function price($id){
	global $konek;
	$sql = "SELECT * FROM stock WHERE id_stock=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['price'];
}
function harga($id){
    $harga = "Rp. ".number_format($id, 2, ",",".");
    return $harga;
}

function name($id){
	global $konek;
	$sql = "SELECT * FROM member WHERE idmbr=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['namembr'];
}

function email($id){
	global $konek;
	$sql = "SELECT * FROM member WHERE idmbr=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['emailmbr'];
}
function member($id){
	global $konek;
	$sql = "SELECT * FROM member WHERE idmbr=$id";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['namembr'];
}
?>