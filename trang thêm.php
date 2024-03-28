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
    <span> <h1>Thêm Thông Tin USER</h1></span>
    <span class="avatar"><h1>Thêm Avatar User</h1></span>
</div>
 <div class="khung">
    
    
    <table>
        <tr>
            <td>
                <label for="text">Tên : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input type="text" id="text" name="text">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Số điện thoại : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input type="text" id="text" name="text">
                    <!-- <input type="checkbox" name="Thêm" id="thêm"> thêm -->
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Sản phẩm :</label>
            </td>
            <td>
                <span class="custom-span">
                    <input type="text" id="text" name="text">
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Địa chỉ:</label>
            </td>
            <td>
                <span class="custom-span">
                    <input type="text" id="text" name="text">
                    
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

<div class="aside">
    <table>
        <tr>
            <td>
              <i style="padding: 7rem;font-size: 4rem; " class="fas fa-plus"> </a></i>
                    
                 <!-- <img src="việt.jpg" alt=""> -->
            </td>
        </tr>
       
    </table>
    
</div>
</div>  
</div>
</body>
</html>