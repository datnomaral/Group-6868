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
    <span> <h1>Sửa Thông Tin Người Dùng</h1></span>
    <span class="avatar"><h1>Sửa Avatar Người Dùng</h1></span>
</div>
 <div class="khung">
    
    
    <table>
        <tbody>
        <tr>
            <td>
                <label for="text">Tên Đăng Nhập: </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text" value="Vietlaembe1004@gmail.com ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Mật Khẩu : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value="VietLaGay@@1jj ">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Tên : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value=" Nguyễn Thành Việt ">
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
                    <input style="width: 100%;" type="text" id="text" name="text"value=" Vietlaembe1004@gmail.com ">
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
    </tbody>
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

<div style="margin-left: 10%;" class="aside">
    
    <table>
        <tr>
            <td>
                <!-- Add a wrapper around the image for better control -->
                <div class="image-wrapper">
                    <img src="anhhunghayngu.pjg.jpg" alt="">
                </div>
                
                <!-- <button onclick="dat()" ></button> -->
                <button onclick="myFunction()"><i style="cursor: pointer;" class="fas fa-trash-alt" id="11"></i></button>
                
                <script>
                    function myFunction() {
                        alert("Bạn đã xá thành công Avatar");
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