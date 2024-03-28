<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="themSANPHAM.css">
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

<!-- <div class="mid"> -->
    <h2 
    style="font-size: 3.5rem;
    color: #FFCC33;
    margin-bottom: 3rem;
    text-transform: uppercase;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top: 15px;">
    THÊM SẢN PHẨM</h2>
<div class="mid1">
    <div class="mid">
<div class="left">
    <table>
        <td>
            <span class="xx">Tên sản phẩm:</span>
            <td><input type="text"></td>
        </td>
    </table>
    <table>
        <td><label for="loại">Loại sản phẩm</label>
            <select style="border:3px solid black;" name="lựu chọn" id="loại">
                <option style="display: flex; background-color: none;" value="CHỦ ĐỀ">Hoa sinh nhật</option>
                <option value="ĐỐI TƯỢNG">Hoa tặng người yêu</option>
            </select>
        </td>
    </table>
  
  <table>
    <td><span class="xx">Số Lượng:</span>
    <td>
        <input style="width: 490px;" type="text">
    </td></td>
    
  </table>
  <table>
    <td>
        <span class="xx">Đơn Giá:</span>
        <td>
            <input style="width: 495px;" type="text">
        </td>
    </td>
  </table>
  <table>
    <td><span class="xx">Thông tin sản phẩm:</span>
    <td >
    <textarea style="border: 1px solid black; height: 170px;width: 420px;" name="" id="" cols="30" rows="10"></textarea>
        <!-- <input style="height: 200px;" type="text"> -->
    </td></td>
    
  </table>
    <div class="u">
        <!-- <a href="#"class="Xóa">Xóa Sản Phẩm</a> -->
        <p id="demo"></p>
        <button type="button" onclick="abc()">Update</button>
        <script>
            function abc(){
                if(confirm("Bạn Đã Update thành công!!")==true){
                    // document.getElementById("demo").innerHTML="Bạn đã xóa thành công";
                    window.location.href="chuc_nang.php"
                }else{
                        window.location.href="ThemSanPham.php";
                    }
                }
            
        </script>
    </div>   
</div>
<div class="right">
    <div style="display: flex;height: 363px;
    width: 304px;margin-top: 20px;" class="khung">
        <div class="preview active" data-target="p1" >
            <!-- <input type="file" id="file_anh" accept=".jpg,.jpeg, .png"> -->
            <a href="chuc_nang.php"><i class="fas fa-undo-alt"></i></a>
            <a href=""><table>
                <tr>
                    <td>
                      <!-- <i style="padding: 7rem;font-size: 4rem; background-color:#fff; width: 300px;height: 335px; text-align: center;" class="fas fa-plus"> </a></i> -->
                      <label for="fileInput" class="file-input-label">
                        <i style="font-size: 100px; text-align: center; margin-top: 37%;" class="fas fa-plus"></i> 
                        <input type="file" id="fileInput" accept=".jpg, .jpeg, .png"> 
                    </td>
                </tr>  
               
            </table></a>
            <p style="font-size: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px;">Thêm ảnh sản phẩm </p>
            </div>

</div>
</div>
</div>
</div>
</body>
</html>
