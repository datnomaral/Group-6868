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
<div class="left">
    <div class="preview active" data-target="p1" >
        <a href="chuc_nang.html"><i class="fas fa-undo-alt"></i></a>
        
    <img src="tunglahan.jpg" alt="">
            <h3>Mochi Tùng La Hán</h3>
            <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</p>
            <div class="price">295.000 đ</div>  
            <div class="buttons">
            </div>   
    </div>
</div>
<!-- <div class="between_right">
    
</div> -->
<div class="right"> 
    <div class="khung">
        <div class="preview active" data-target="p1" >
            <!-- <input type="file" id="file_anh" accept=".jpg,.jpeg, .png"> -->
            <a href="chuc_nang.html"><i class="fas fa-undo-alt"></i></a>
            <table>
                <tr>
                    <td >
                      <!-- <i style="padding: 7rem;font-size: 4rem; background-color:#fff; width: 300px;height: 335px; text-align: center;" class="fas fa-plus"> </a></i> -->
                      <label for="fileInput" class="file-input-label">
                        <i style="font-size: 100px; text-align: center; margin-top: 37%;" class="fas fa-plus"></i> 
                        <input type="file" id="fileInput" accept=".jpg, .jpeg, .png">
                    </label>
                    </td>
                </tr>  
               
            </table>
             <div class="wrapper">
            <div class="form-group">
                <!-- <label style="margin-right:20%;" for="username">Tên sản phẩm:</label> -->
                <label style=" margin-right:20%;" for="">Tên sản phẩm:</label>
                <input type="text" class="form-input" id="username" name="username" >
            </div>
            <div class="form-group">
                <label style="margin-right: 7%;" for="">Thông tin sản phẩm:</label>
                <!-- <label for="">Thông tin sản phẩm:</label> -->
                <input type="text" class="form-input" id="password" name="password" >
            </div>
            <div class="form-group">
                <label style="margin-right: 40%;" for="">Giá:</label>
                <!-- <label for="">Giá:</label> -->
                <span class="no"><input type="text" class="text" id="text" name="text" ></span>
                
            </div>
             </div>
            
                </div>  
                    <div class="form-group-update">
                    
                    <div class="link_wed"><button > <a href="admin.html">Update</a> </button> </div>
                </div>
        </div>                                    
     </div>
</div>
 
</div>
</body>
</html>