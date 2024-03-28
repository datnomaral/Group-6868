<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER!!!!.Hung.Viet.Dat1</title>
    <link rel="stylesheet" href="style_user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<?php
include_once "layout/body.php";
?>

<div class="main-content">
<div class="header-wrapper">
    <div class="header-title">
        

<h2><img src="logo1.jpg" alt=""></h2>
</div>
<div class="use--info">
    <div class="seacher--box">
        <i class="fas fa-search"></i>
        <input type=" text" placeholder="Tìm Kiếm" style="width: 200px; height: 25px; padding: 5px;">
    </div>
    <div class="av">
    <h1 style="padding: 10px;"><img src="1avatar.jpg" alt="ảnh đại diện"></h1>    
    </div>
</div>
</div>
<div class="tabular-wrapper">
            <form action="infor_user.php" method="post"></form>
            <h3 class="main-title">Dữ Liệu Người Dùng</h3>
            <!-- <form action="infor_user.php" method="post"> -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            
                            <th>Tên người dùng</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>                           
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                            <th style="text-align: center;">Khóa Mở</th> 
                                                     
                        </tr>                      
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <button style="border: 2px solid black; padding: 6px;"> <p style="font-size: 16px; "> <a style="text-decoration: none;" href="them_Tai_Khoan.php">Thêm Tài Khoản</a></p> </button>
                                </td>
                            </tr>
                        </tfoot>
                
            <!-- </form> -->
    </div>
<?php
// Kết nối cơ sở dữ liệu
require_once "connection.php";

// Viết câu lệnh truy vấn
$lietke_sql = "SELECT * FROM add_tv";

// Thực thi câu lệnh
$result = mysqli_query($conn, $lietke_sql);

// Duyệt qua và in ra
while ($r = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
<td><?php  echo $r['hoten']; ?></td>
<td><?php  echo $r['username'];?></td>
<td><?php  echo $r['password'];?></td>
<td><?php  echo $r['phone']; ?></td>
<div class="container">
<td> <button type="button" class="btn btn-danger"><a onclick ="return confirm('Bạn chắc chắn muốn xóa!!')" href="xoa.php?sid=<?php  echo $r['id']; ?>">Xóa</a></button>
<button type="button" class="btn btn-primary"><a onclick ="return confirm('Bạn chắc chắn muốn sửa!!')" href="edit.php?sid=<?php  echo $r['id']; ?>">Sửa</a></button> 
</td>
<td>  
<button type="button" class="btn btn-primary"><a onclick ="return confirm('Bạn chắc chắn muốn sửa!!')" href="edit.php?sid=<?php  echo $r['id']; ?>">Sửa</a></button> 
<button type="button" class="btn btn-primary"><a onclick ="return confirm('Bạn chắc chắn muốn sửa!!')" href="edit.php?sid=<?php  echo $r['id']; ?>">Sửa</a></button> 


</td>
</div>
    </tr>
    
    <?php
}
?>
           </thead>
        </table>
            </div> 
   
</div>  
</div>
</body>
</html>