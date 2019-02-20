<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM stock WHERE id_stock = '$ID'";
mysqli_query($konek,$sql);
header('location:../stock.php');
?>