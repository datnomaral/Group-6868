<?php
// dữ liệu nhập từ form
$hoten =$_POST['hoten'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$sdt=$_POST['sdt'];
$id=$_POST['sid'];
// kết nối cơ sở dữ liệu (kiểu như lấy dữ liệu từ database)
require_once'connection.php';
// viết câu lệnh sql để truy vấn
$capnhat = "UPDATE add_tv SET hoten='$hoten' ,username='$user',password='$pass',phone='$sdt' WHERE id=$id ";
// echo $addsql; exit;
// thực thi câu lệnh 
mysqli_query($conn,$capnhat);
header("Location: infor_user.php");
exit();
 ?>