<?php  
SESSION_start();
include 'koneksi.php';


$name     	= $_POST['name'];
$email     	= $_POST['email'];
$pass    = $_POST['password'];


$sql2 = "insert into member (namembr, emailmbr, passmbr) values ('$name', '$email', '$pass')";

mysqli_query($konek,$sql2);


	$sql = "select * from user where email = '$email' AND password = '$pass'";
	$query = mysqli_query($konek, $sql);
	$row = mysqli_fetch_assoc($query);

	$sql1 = "select * from member where emailmbr = '$email' AND passmbr = '$pass'";
	$query1 = mysqli_query($konek, $sql1);
	$row1 = mysqli_fetch_assoc($query1);


if (!empty($email) && !empty($pass)) {		
	if ($row) {
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		header("location: ../script/index.php");
	}
	elseif($row1){
		$_SESSION['emailmbr'] = $email;
		$_SESSION['namembr'] = $row1['namembr'];
		$_SESSION['idmbr'] = $row1['idmbr'];
		header("location: ../script/product.php");
	}
	else {
		echo "Email dan Password Tidak Terdaftar";
	}
} else{
	echo "Email atau Password Kosong";
}

?>