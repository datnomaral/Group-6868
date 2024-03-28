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
<div class="tabular-wrapper">
    <h3 class="main-title">Quản lí đơn hàng của khách </h3>
    <form  style="height: 60px; border: 2px solid black;  padding: 8px;margin: 20px;" id="filterForm">
       <label style="padding: 10rem;" for=""> Khoảng thời gian tạo đơn :</label>
       
        <label for="startDate">Từ ngày:</label>
        <input style="border: 1.5px solid black;"  type="date" id="startDate" name="startDate">
    
        <label for="endDate">Đến ngày:</label>
        <input style="border: 1.5px solid black;"  type="date" id="endDate" name="endDate">
    
        <button style="margin-left: 3%; cursor: pointer;" type="button" onclick="filterData()"> <a style=" text-decoration: none;" href="">Tìm kiếm</a></button>
      
      </form>
    <div class="table-container">
        <table>
            <thead>
                <tr style="text-align: center;">
                    
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Ngày tạo</th>
                    <th>Khách hàng</th>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th style="text-align: center;">Giá</th>
                    <th>Phương thức thanh toán</th>
                    <th>Chi tiết đơn hàng</th>
                    <th>Trạng thái</th>
                </tr>
                <tbody>
                    <tr >
                        <td style="text-align: center;">1</td>
                        <td>MD1</td>
                        <td>20-11-2023</td>
                        <td>Nguyễn Thành Việt  <br> <br>03668686868</td>
                        <td>Mochi Tùng La Hán</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">295.000 đ</td>
                        <td style="text-align: center;">Chuyển khoản</td>
                        <!-- <td style="color: green;cursor: pointer; "> Đã xử lí</td> -->
                        <td><a style="color: green;" href="chi_tiết_đơn_hàng.html">Xem chi tiết đơn hàng</a></td>
                        <td style="color: red;cursor: pointer;"> <button style="width: 90px; background-color: azure; border-radius: 10px;"><p style="color: black;">Đã xử lí</p> </button> </td>

                    </tr>
                </tbody>
                <tbody>
                    <tr >
                        <td style="text-align: center;">2</td>
                        <td>MD2</td>
                        <td>26-12-2023</td>
                        <td>Nguyễn Thành Đạt  <br> <br>03668686868</td>
                        <td>Mochi Kinh Ngân Bích</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">405.000 đ</td>
                        <td style="text-align: center;">Chuyển khoản</td>
                        <td><a style="color: green;" href="donhang1.html">Xem chi tiết đơn hàng</a></td>
                        
                        <!-- <td style="color: green; cursor: pointer;"> Đã xử lí</td> -->
                        <td style="color: red;cursor: pointer;"> <button style="width: 90px; background-color: azure; border-radius: 10px;"><p style="color: black;">Đã xử lí</p> </button> </td>

                    </tr>
                </tbody>
                <tbody>
                    <tr >
                        <td style="text-align: center;">3</td>
                        <td>MD3</td>
                        <td>20-11-2023</td>
                        <td>Nguyễn Thành Việt  <br> <br>03668686868</td>
                        <td>Mochi Kim Ngân Bích</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">405.000 đ</td>
                        <td style="text-align: center;">Chuyển khoản</td>
                        <td><a style="color: green;" href="donhang4.html">Xem chi tiết đơn hàng</a></td>
                        
                        <!-- <td style="color: red;cursor: pointer; "> Chờ xử lí</td> -->
                        <td style="color: red;cursor: pointer;"> <button style="width: 90px; background-color: azure; border-radius: 10px;"><p style="color: black;">Đã xử lí</p> </button> </td>

                    </tr>
                </tbody>
                <tbody>
                    <tr >
                        <td style="text-align: center;">4</td>
                        <td>MD4</td>
                        <td>1-1-2024</td>
                        <td>Trương Lê Gia Hưng  <br> <br>03668686868</td>
                        <td>Mochi Lưỡi Hổ</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">270.000 đ</td>
                        <td style="text-align: center;">Chuyển khoản</td>
                        <td><a style="color: green;" href="donhang3.html">Xem chi tiết đơn hàng</a></td>
                        <td style="color: red;cursor: pointer;"> <button style="width: 90px; background-color: rgb(238, 77, 77); border-radius: 10px;"><p style="color: black;">Chưa xử lí</p> </button> </td>

                        <!-- <td style="color: blueviolet;cursor: pointer; "> <button style="width: 70px; background-color: azure; border-radius: 10px;">Chưa xử lí</button> </td> -->
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            
                        </td>
                    </tr>
                </tfoot>
            </thead>
        </table>
    </div>
</div>
    
</div>
</body>
</html>