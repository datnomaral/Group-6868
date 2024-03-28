<?php
// dữ liệu nhập từ form
$hoten =$_POST['hoten'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$sdt=$_POST['sdt'];
// kết nối cơ sở dữ liệu (kiểu như lấy dữ liệu từ database)
require_once'connection.php';
// viết câu lệnh sql để truy vấn
$addsql = "INSERT INTO add_tv (hoten, username,password ,phone)  VALUE('$hoten' ,'$user','$pass','$sdt') ";
// echo $addsql; exit;
// thực thi câu lệnh 
mysqli_query($conn,$addsql);
header("Location: infor_user.php");
exit();
 ?>