<!DOCTYPE html>
<html lang="en">
<?php
 include_once 'layout/head.php';
?>
    <div class="sidebar">
    <div class ="logo"></div>
    <ul class ="main">
        <li class="active">
            <a href="admin.html">
                <i class="fas fa-tachometer-alt"></i>
                <span>Bảng điều khiển</span>
            </a>
        </li>
        <li>
            <a href="infor_user.html">
                <i class="fas fa-user"></i>
                <span>Quản Lí Người Dùng</span>
            </a>
        </li>
        <!-- <li>
            <a href="#">
                <i class="fas fa-chart-line"></i>
                <span>Phân Tích</span>
            </a>
        </li> -->
        <li>
            <a href="chuc_nang.html">
                <i class="fas fa-space-shuttle"></i>
                <span>Chức Năng</span>
            </a>
        </li>
        <li>
            <a href="đơn_hàng_của_khách.html">
                <i class="fas fa-users-cog"></i>
                <span>Quản Lí Đơn Hàng Của Khách</span>
            </a>
        </li>
        <li>
            <a href="thống_kê.html">
                <i class="fas fa-globe"></i>
                <span>Thống Kê</span>
            </a>
        </li>
        <li class="logout">
            <a href="index.html">
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
<h2  style="text-align: center; font-size: 30px; color: rgba(255, 140, 0, 1);">Chi tiết đơn hàng</h2>
    <div class="tren">
        <table>
            <i class="far fa-user"> Thông tin khách hàng</i>
            <td> 
                Đơn hàng: MD1_57524242825
                <br> 
                 Họ và tên: Nguyễn Thành Việt 
                 <br>
                Số điện thoại:0368686868
                <br>
                Địa chỉ: 78/7 Cầu giấy 
                <button style="background-color: rgb(200, 158, 240); border-radius: 10px; margin-right: 30%; " >Đã giao hàng</button>
            </td>
        </table>
    </div>
    <div class="traitren">
       
    </div>
   
    <div class="giua">
        <table>
           <p>Sản phẩm:</p>
           <td>

            <img style="display: flex;width: 120px;height: 120px; border-radius: 5px;" src="tunglahan.jpg" alt="">
            <div class="cc">
                Sl:1
              <p style="color: blue;">Mochi Tùng La Hán</p> 
                
                <p><span>295.000 đ</span></p>
            </div>
           </td>
        
        </table>
        
    </div>
    <!-- <div class="giua">
        <table>
           <p>Sản phẩm:</p>
           <td>

            <img style="display: flex;width: 120px;height: 120px; border-radius: 5px;" src="khimbich.jpg" alt="">
            <div class="cc">
                Sl:1
                <a href="#">Mochi Kim Ngân Bích</a>
                
                <p><span>405.000 đ</span></p>
            </div>
           </td>
        
        </table>
        
    </div> -->
    <div class="duoi">
        <table style="border: 1px solid black;">
            Tổng :295.000 đ
        </table>
    </div>
    <div class="traiduoi">
        <button> <a href="thống_kê.html">Quay Lại</a></button>
    </div>
    
    <div class="traidan"></div>
    <div class="traicuoi"></div>
    <!DOCTYPE html>


  




</div>

</body>
</html>