<?php
	include '../../config/koneksi.php';
	$ID 			= $_POST['id'];
	$category      	= $_POST['category'];


	$sql = "UPDATE category SET name = '$category' where id_category = '$ID'";
	mysqli_query($konek,$sql);
	header('location:../category.php');
?>