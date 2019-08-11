<?php
$khoa = $_POST['khoa'];
$maSinhVien = $_POST['maSinhVien'];
$hoTenSV = $_POST['hoTenSV'];
$gioiTinhSV = $_POST['gioiTinhSV'];
$ngaySinhSV = $_POST['ngaySinhSV'];
$cmndSV = $_POST['cmndSV'];
$queQuan = $_POST['queQuan'];
$phone = $_POST['phone'];
$classMate = $_POST['classMate'];
$facebook = $_POST['facebook'];
$note = $_POST['note'];

$link = mysqli_connect("localhost", "root", "root", "QUANLY_VMGD");

// Check connection
if($link === false){
	die("ERROR: Could not connect database, please call 0975-838-834. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO THANHVIEN(TenNganhTuyenSinh, MaSinhVien, HoTen, GioiTinh, NgaySinh, CMND, QueQuan, DienThoai, Lop, Facebook, Note, TimeInsert, flagShow) VALUES ('$khoa','$maSinhVien','$hoTenSV','$gioiTinhSV','$ngaySinhSV','$cmndSV','$queQuan','$phone','$classMate','$facebook','$note', NOW(), 1)";
if(mysqli_query($link, $sql)){
	header("Location: http://localhost:8888/rm/complete.php?user=".$hoTenSV);
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

		// Close connection
mysqli_close($link);
?>  