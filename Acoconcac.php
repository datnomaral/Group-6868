<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="thêm trang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>
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
<div class="section">
    <span> <h1>Sửa Thông Tin USER</h1></span>
    <span class="avatar"><h1>Sửa Avatar User</h1></span>
</div>
 <div class="khung">
    
    
    <table>
        <tr>
            <td>
                <label for="text">Tên Đăng Nhập: </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text" value="Hieulaembe1004@gmail.com ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Mật Khẩu : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value="HieuLaGay@@1jj ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Tên : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value=" Nguyễn Thành Trung Hiếu ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Số điện thoại : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text" value="0368686868">
                    <!-- <input type="checkbox" name="Thêm" id="thêm"> thêm -->
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Email:</label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value=" Hieulaembe1004@gmail.com ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Địa chỉ:</label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text" value=" 78/7 Cầu Giấy ">
                    
                </span>
            </td>
        </tr>
        
    </table>
    <div class="u">
        <!-- <a href="#"class="Xóa">Xóa Sản Phẩm</a> -->
        <p id="demo"></p>
        <button style="width: 123px;
        height: 40px;
        background-color: #CC99FF;
        color:black;
        border-radius: 10px;
        cursor: pointer;" type="button" onclick="abc()">Update</button>
        <script>
            function abc(){
                if(confirm("Bạn Đã Update thành công!!")==true){
                    // document.getElementById("demo").innerHTML="Bạn đã xóa thành công";
                    window.location.href="infor_user.html"
                }else{
                        window.location.href="sửa.html";
                    }
                }
            
        </script>
    </div>

<!-- <label for="text">Check me</label> -->
 </div>

<div style="margin-left: 8.5%;" class="aside">
    
    <table>
        <tr>
            <td>
                <!-- Add a wrapper around the image for better control -->
                <div class="image-wrapper">
                    <img src="hiếu.jpg" alt="">
                </div>
                <label for="">Sửa Avater  </label>
                <input type="file" name="" id="" value="jpg">
            </td>
        </tr>
    </table>
  
    
</div>
</div>  
</div>
</body>
</html>