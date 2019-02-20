<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM sale WHERE id_sale = '$ID'";
mysqli_query($konek,$sql);
header('location:../order.php');
?>