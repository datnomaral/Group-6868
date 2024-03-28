<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHỨC NĂNG</title>
    <link rel="stylesheet" href="chuc_nang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>
    <div class="sidebar">
    <div class ="logo"></div>
    <ul class ="main">
        <li class="active">
            <a href="admin.php">
                <i class="fas fa-tachometer-alt"></i>
                <span>Bảng điều khiển</span>
            </a>
        </li>
        <li>
            <a href="infor_user.php">
                <i class="fas fa-user"></i>
                <span>Quản Lí User</span>
            </a>
        </li>
        <!-- <li>
            <a href="#">
                <i class="fas fa-chart-line"></i>
                <span>Phân Tích</span>
            </a>
        </li> -->
        <li>
            <a href="chuc_nang.php">
                <i class="fas fa-space-shuttle"></i>
                <span>Chức Năng</span>
            </a>
        </li>
        <li>
            <a href="đơn_hàng_của_khách.php">
                <i class="fas fa-users-cog"></i>
                <span>Quản Lí Đơn Hàng Của Khách</span>
            </a>
        </li>
        <li>
            <a href="thống_kê.php">
                <i class="fas fa-globe"></i>
                <span>Thống Kê</span>
            </a>
        </li>
        <li class="logout">
            <a href="index.php">
                <i class="fas fa-sign-out-alt"></i>
                <span> Thoát </span>
            </a>
        </li>
    </ul>
</div>

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
    <!-- <i  class="fas fa-user-tie"><a href="css-form-login-show-hide-password-master/"><u style="color: black;">Log in</u></a> </i> -->
    
    </div>    
</div> 
</div>
<h2 class="title">CHỨC NĂNG</h2>
<div class="anhdemo">
    
<div class="anh" data-name="p1"> 
    <a href="suaSP1.php"><img src="tunglahan.jpg" alt=""> 
    <!-- <figure><img src="tunglahan.jpg" alt=""> <figcaption>Mochi Tùng La Hán</figcaption> </figure>  -->
    <h3>Mochi Tùng La Hán</h3>
    <div class="price">295.000 đ</div></a>
    
</div>
    <div class="anh"data-name="p2"> 
        <a href="suaSP2.php">
             <img src="khimbich.jpg" alt="">
        <h3>Mochi Kim Ngân Bích</h3>
        <div class="price">405.000 đ</div></a>
       
    </div>
    <div class="anh" data-name="p3">
        <a href="suaSP3.php">
            <img src="senda.jpg" alt="">
        <h3>Mochi Sen Đá Mix</h3>
        <div class="price">300.000 đ</div></a>
        
    </div>
    <div class="anh" data-name="p4">
        <a href="suaSP4.php"><img src="luoiho.jpg" alt="">
        <h3>Mochi Lưỡi Hổ</h3>
        <div class="price">270.000 đ</div></a>
    </div>
    <div class="anh" data-name="p5">
        <a href="suaSP5.php"><img src="bangsing.jpg" alt="">
        <h3>Mochi Bàng Sing Mini</h3>
        <div class="price">280.000 đ</div></a>
        
    </div>
    <div class="anh" data-name="p5">
        <a href="suaSP6.php"><img src="trau1111.jpg" alt="">
        <h3>Mochi Trầu Bà Kim Cương</h3>
        <div class="price">310.000 đ</div></a>
        
    </div>
    <div class="anh" data-name="p5">
        <a href="suaSP7.php"><img src="xuongrong.jpg" alt="">
        <h3>Mochi Xương Rồng</h3>
        <div class="price">270.000 đ</div></a>
        
    </div>
    <div class="anh6">
        <div class="connn">
        <a style="color: black;" href="ThemSanPham.php"><i class="fas fa-plus"></i> </a>
    </div>
        <!-- <img src="cong.jpg" alt=""> -->
        <div class="add"> <a style="color: black;" href="ThemSanPham.php"><h3>Thêm Sản Phẩm</h3> </a></div>
    </div>
   
 
</div>
</body>
</html>