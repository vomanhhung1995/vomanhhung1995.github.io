<?php
$maSinhVien = $_POST['maSinhVien'];
$status = $_POST['flagShow'];

$link = mysqli_connect("localhost", "root", "root", "QUANLY_VMGD");

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "UPDATE THANHVIEN SET flagShow = $status WHERE MaSinhVien = '$maSinhVien' ";
if(mysqli_query($link, $sql)){
	header("Location: http://localhost:8888/capnhat/complete.php?user=".$maSinhVien);
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

		// Close connection
mysqli_close($link);
?>  