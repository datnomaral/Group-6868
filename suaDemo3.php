<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="thêm trang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

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
    <!-- <i  class="fas fa-user-tie"><a href="css-form-login-show-hide-password-master/"><u style="color: black;">Log in</u></a> </i> -->
    
    </div>
</div>
</div>
<div class="section">
    <span> <h1>Sửa Thông Tin Sản Phẩm</h1></span>
    <span class="avatar"><h1> Ảnh Sản Phẩm </h1></span>
</div>
 <div class="khung">
    
    
    <table>
        <tr>
            <td>
                <label for="text">Tên Sản Phẩm: </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text" value="Mochi Sen Đá Mix">
                </span>
            </td>
        </tr>
        <tr>
            <td>    
                <label for="text">Thông Tin Sản Phẩm : </label>
            </td>
            <td>
                <span class="custom-span">
                    <textarea style="width: 420px;height: 170px;" name="" id="" cols="10" rows="10">Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</textarea>
                    <!-- <input style="width: 100%;" type="text" id="text" name="text"value="Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp) "> -->
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="text">Giá : </label>
            </td>
            <td>
                <span class="custom-span">
                    <input style="width: 100%;" type="text" id="text" name="text"value=" 300.000 đ ">
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
                    window.location.href="chuc_nang.php"
                }else{
                        window.location.href="";
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
              <div id="imageContainer">
                <img src="senda.jpg" alt="">
              </div>
            </div>
            <button onclick="deleteImage()"><i style="cursor: pointer;" class="fas fa-trash-alt" id="11"></i></button>
    
            <label for=""> Ảnh </label><br>
            <label for="input"> <i style="cursor: pointer;" class="fas fa-plus"></i> Thêm ảnh</label>
            <input style="display: none;" type="file" name="" id="input" value="jpg">
          </td>
        </tr>
      </table>
    
      <script>
        function deleteImage() {
          // Lấy tham chiếu đến phần tử chứa ảnh
          var imageContainer = document.getElementById('imageContainer');
    
          // Kiểm tra xem phần tử có tồn tại hay không
          if (imageContainer) {
            // Xóa phần tử chứa ảnh
            imageContainer.remove();
            alert("Bạn đã xóa thành công ảnh");
          } else {
            console.error('Không tìm thấy phần tử chứa ảnh');
          }
        }
      </script>
    
</div>
</div>  
</div>
</body>
</html>