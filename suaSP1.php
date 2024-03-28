<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHỨC NĂNG</title>
    <link rel="stylesheet" href="style_chucnang.css">
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
<h2 class="title">CHỨC NĂNG</h2>
<div class="anhdemo">
    
<div class="anh" data-name="p1"> 
    <img src="tunglahan.jpg" alt=""> 
    <!-- <figure><img src="tunglahan.jpg" alt=""> <figcaption>Mochi Tùng La Hán</figcaption> </figure>  -->
    <h3>Mochi Tùng La Hán</h3>
    <div class="price">295.000 đ</div>
</div>
    <div class="anh"data-name="p2"> <img src="khimbich.jpg" alt="">
        <h3>Mochi Kim Ngân Bích</h3>
        <div class="price">405.000 đ</div>
    </div>
    <div class="anh" data-name="p3"><img src="senda.jpg" alt="">
        <h3>Mochi Sen Đá Mix</h3>
        <div class="price">300.000 đ</div>
    </div>
    <div class="anh" data-name="p4"><img src="luoiho.jpg" alt="">
        <h3>Mochi Lưỡi Hổ</h3>
        <div class="price">270.000 đ</div>
    </div>
    <div class="anh" data-name="p5"><img src="bangsing.jpg" alt="">
        <h3>Mochi Bàng Sing Mini</h3>
        <div class="price">280.000 đ</div>
    </div>
    <div class="anh6">
        <img src="cong.jpg" alt="">
        <div class="add">thêm sản phẩm</div>
    </div>
    <div class="product-preview" >
        
        <div class="preview active" data-target="p1" >
            <a href="chuc_nang.php"><i class="fas fa-undo-alt"></i></a>
            
        <img src="tunglahan.jpg" alt="">
                <h3>Mochi Tùng La Hán</h3>
                <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</p>
                <div class="price">295.000 đ</div>  
                <div class="buttons">
                    <a href="suaDemo1.php" class="Sửa">Sửa Sản Phẩm</a>
                    <!-- <a href="#"class="Xóa">Xóa Sản Phẩm</a> -->
                    <p id="demo"></p>
                    <button type="button" onclick="abc()">Xóa Sản Phẩm</button>
                    <script>
                        function abc(){
                            if(confirm("Bạn Chắc Chắn Muốn Xóa Sản Phẩm này")==true){
                                // document.getElementById("demo").innerHTML="Bạn đã xóa thành công";
                                window.location.href="chuc_nang.html"
                            }else{
                                    window.location.href="suaSP1.html";
                                }
                            }
                        
                    </script>
                </div>   
        </div>
        <div class="preview" data-target="p1" >
            <img src="khimbich.jpg" alt="">
            <h3>Mochi Kim Ngân Bích</h3>
            <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông
                nghiệp)</p>
            
            <div class="price">405.000 đ</div>
            <div class="buttons">
                <a href="suaDemo2.html" class="Sửa">Sửa Sản Phẩm</a>
                <a href="#" class="Xóa">Xóa Sản Phẩm</a>
            </div>
            </div>
            <div class="preview" data-target="p1" >
                <img src="senda.jpg" alt="">
                        
                        <h3>Mochi Sen Đá Mix</h3>
                        <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</p>
                         <div class="price">300.000 đ</div>
                        <div class="buttons">
                            <a href="suaDemo3.html" class="Sửa">Sửa Sản Phẩm</a>
                            <a href="#"class="Xóa">Xóa Sản Phẩm</a>
                        </div>   
                </div>
                <div class="preview" data-target="p1" >
                    <img src="luoiho.jpg" alt="">                          
                            <h3>Mochi Lưỡi Hổ</h3>
                            <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</p>
                            <div class="price">270.000 đ</div>
                            <div class="buttons">
                                <a href="suaDemo4.html" class="Sửa">Sửa Sản Phẩm</a>
                                <a href="#"class="Xóa">Xóa Sản Phẩm</a>
                            </div>   
                    </div>
                    <div class="preview" data-target="p1" >
                        <img src="bangsing.jpg" alt="">                                 
                                <h3>Mochi Bàng Sing Mini</h3>
                                <p>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự nhiên của hàng nông nghiệp)</p>
                              <div class="price">280.000 đ</div>
                                <div class="buttons">
                                    <a href="suaDemo5.html" class="Sửa">Sửa Sản Phẩm</a>
                                    <a href="#"class="Xóa">Xóa Sản Phẩm</a>
                                </div>   
                        </div>           

    </div>
 
</div>
</body>
</html>