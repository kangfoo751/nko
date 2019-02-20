<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM category WHERE id_category = '$ID'";
mysqli_query($konek,$sql);
header('location:../category.php');
?>