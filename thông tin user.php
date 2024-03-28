<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="thêm trang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<?php
include_once "layout/body.php"
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
    <!-- <i  class="fas fa-user-tie"><a href="css-form-login-show-hide-password-master/"><u style="color: black;">Log in</u></a> </i> -->
    
    </div>
</div>
</div>
<div class="section">
    <span> <h1>Thông Tin Khách Hàng</h1></span>
    <span class="avatar"><h1>Avatar Khách Hàng</h1></span>
</div>
 <div class="khung">
    
    
    <table style="padding: 10px;">
        <tr>
            <td>
                <label for="text">Tên Đăng Nhập : </label>
            </td>
            <td>
                <span class="custom-span">
                    Vietlaembe1004@gmail.com 
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Mật Khẩu: </label>
            </td>
            <td>
                <span class="custom-span">
                   VietLaGay@@1jj
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Tên : </label>
            </td>
            <td>
                <span class="custom-span">
                   Nguyễn Thành Việt
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Số điện thoại : </label>
            </td>
            <td>
                <span class="custom-span">
                    0368686868
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
                    Vietlaembe1004@gmail.com
                    
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Địa chỉ:</label>
            </td>
            <td>
                <span class="custom-span">
                78/7 Cầu Giấy
                    
                </span>
            </td>
        </tr>
        <!-- <tr>
            <td class="update">
            </td>
            
        </tr> -->
        
    </table>
<div class="u">
            <!-- <a href="#"class="Xóa">Xóa Sản Phẩm</a> -->
            <p id="demo"></p>
            <button style="width: 123px;
    height: 40px;
    background-color: #CC99FF;
    color:black;
    border-radius: 10px;
    cursor: pointer;"> <a href="infor_user.php">Quay lại</a></button>
            <!-- <script>
                function abc(){
                    if(confirm("Bạn chắc chắn muốn quay lại")==true){
                        // document.getElementById("demo").innerHTML="Bạn đã xóa thành công";
                        window.location.href="infor_user.php"
                    }else{
                            window.location.href="#";
                        }
                    }
                
            </script> -->
        </div>   

<!-- <label for="text">Check me</label> -->
 </div>

<div style="margin-left: 10%;" class="aside">
    <table>
        <tr>
            <td>
              <!-- <i style="padding: 7rem;font-size: 4rem; " class="fas fa-plus"> </a></i> -->
                    
                 <img src="anhhunghayngu.pjg.jpg" alt="">
            </td>
        </tr>
       
    </table>
    
</div>
</div>  
</div>
</body>
</html>