<?php
include '../../config/koneksi.php';
$category      = $_POST['category'];

$sql = "insert into category (name) values ('$category')";
mysqli_query($konek,$sql);
header('location:../category.php');
?>
