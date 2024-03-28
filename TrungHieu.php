<!DOCTYPE html>
<html lang="en">
<?php
 include_once 'layout/head.php';
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
    <span class="avatar"><h1> Ảnh Khách Hàng</h1></span>
</div>
 <div class="khung">
    
    
    <table style="padding: 10px;">
        <tr>
            <td>
                <label for="text">Tên Đăng Nhập : </label>
            </td>
            <td>
                <span class="custom-span">
                    Hieulaembe1004@gmail.com 
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Mật Khẩu: </label>
            </td>
            <td>
                <span class="custom-span">
                    HieuLaGay@@1jj
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Tên : </label>
            </td>
            <td>
                <span class="custom-span">
                   Nguyễn Thành Trung Hiếu
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
                    Hieulaembe1004@gmail.com
                    
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
    cursor: pointer;"> <a href="infor_user.html">Quay lại</a></button>
            <!-- <script>
                function abc(){
                    if(confirm("Bạn chắc chắn muốn quay lại")==true){
                        // document.getElementById("demo").innerHTML="Bạn đã xóa thành công";
                        window.location.href="infor_user.html"
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
                    
                 <img src="hiếu.jpg" alt="">
                 <button onclick="myFunction()"><i style="cursor: pointer;" class="fas fa-trash-alt" id="11"></i></button>
                
                 <script>
                     function myFunction() {
                         alert("Bạn đã xá thành công ảnh");
                     }
                 </script>
                 
                 <label for=""> Ảnh </label><br>
                 <label for="input"> <i  style="cursor: pointer;" class="fas fa-plus"></i> Thêm ảnh</label>
                 <input style="display: none;" type="file" name="" id="input" value="jpg">
            </td>
        </tr>
       
    </table>
    
</div>
</div>  
</div>
</body>
</html>