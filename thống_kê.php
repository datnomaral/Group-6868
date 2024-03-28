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

<div class="copy">
    <h2 style="text-align: center; padding: 1rem;  ">Thống kê kinh doanh</h2>
   

    <form  style="height: 80px; border: 2px solid black;  padding: 8px;margin: 20px;" id="filterForm">
       
      <label for="productName">Sản phẩm:</label>
      <input style="border: 1.5px solid black;"  type="text" id="productName" name="productName">
        <span style="padding: 10px;">
                <label for="xx">Loại Sản Phẩm</label>
                <select style="border: 1px solid black;"name="Loại Sản Phẩm" id="xx">
                    <option style="border: 1px solid black;" value="Hoa Sinh Nhật">Hoa Sinh Nhật</option>
                    <option style="border: 1px solid black;" value="Hoa Sinh Nhật">Hoa Tặng Người Yêu</option>

                </select>
            </span>
      <label for="startDate">Từ ngày:</label>
      <input style="border: 1.5px solid black;"  type="date" id="startDate" name="startDate">
  
      <label for="endDate">Đến ngày:</label>
      <input style="border: 1.5px solid black;"  type="date" id="endDate" name="endDate">
  
      <button style="margin-left: 3%; cursor: pointer;" type="button" onclick="filterData()"> <a style=" text-decoration: none;" href="">Tìm kiếm</a></button>
    
    </form>
  
    <div style="margin: 20px;" class="bangthongke">
        <table>
            <thead>
                <tr style="text-align: center;">
                    
                    <th>Sản phẩm</th>
                    <th style="text-align: center;">Loại sản Phẩm</th>                    
                    <th style="text-align: center;">Giá</th>
                    <th style="text-align: center;">Ngày Bán</th>
                    <th style="text-align: center;">Số Lượng Bán </th>
                    <th style="text-align: center;">Tổng tiền</th>
                    <th style="text-align: center;">Trạng Thái</th>
                </tr>
                <tbody >
                    <tr>
                        <td>
                            <img style="height: 113px; width: 110px;" src="tunglahan.jpg" alt="">
                            <p>Mochi Tùng La Hán</p>
                            <p style="color: green; cursor: pointer;">
                              <a href="donhanhDEMO1.html">Xem chi tiết đơn hàng</a>
                            </p>
                          </td>
                          
                        <!-- <td> <img style="height: 113px;width: 110px;" src="tunglahan.jpg" alt=""> <p>Mochi Tùng La Hán</p><p style="color: green; cursor: pointer;"><a href="đơn_hàng_của_khách.html"></a>Xem chi tiết đơn hàng</p> </td> -->
                        <td style="text-align: center;">Hoa Sinh Nhật</td>
                        <td style="text-align: center;">295.000 đ</td>

                        <td style="text-align: center;">20-11-2023</td>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">295.000 đ</td>
                        <td style="text-align: center; color: green;">Đã giao hàng</td>
                        

                    </tr>
                </tbody>
                <tbody >
                    <tr>
                        <td>
                            <img style="height: 113px; width: 110px;" src="khimbich.jpg" alt="">
                            <p>Mochi Kim Ngân Bích</p>
                            <p style="color: green; cursor: pointer;">
                              <a href="donhangDEMO2.html">Xem chi tiết đơn hàng</a>
                            </p>
                          </td>
                          
                        <!-- <td> <img style="height: 113px;width: 110px;" src="khimbich.jpg" alt=""> <p>Mochi Kim Ngân Bích</p><p style="color: green; cursor: pointer;"><a href="#"></a>Xem chi tiết đơn hàng</p> </td> -->
                        <td style="text-align: center;">Hoa Tặng Người yêu</td>
                        
                        <td style="text-align: center;">405.000 đ</td>
                        <td style="text-align: center;">26-12-2023</td>

                        <td style="text-align: center;">2</td>
                        <td style="text-align: center;">810.000 đ</td>
                        <td style="text-align: center; color: green;">Đã giao hàng</td>

                    </tr>
                </tbody>
                <tbody >
                    <tr>
                        <td>
                            <img style="height: 113px; width: 110px;" src="luoiho.jpg" alt="">
                            <p>Mochi Lưỡi Hổ</p>
                            <p style="color: green; cursor: pointer;">
                              <a href="donhangDEMO3.html">Xem chi tiết đơn hàng</a>
                            </p>
                          </td>
                          
                        <!-- <td> <img style="height: 113px;width: 110px;" src="luoiho.jpg" alt=""> <p>Mochi Lưỡi Hổ</p><p style="color: green; cursor: pointer;"><a href="#"></a>Xem chi tiết đơn hàng</p> </td> -->
                        <td style="text-align: center;">Hoa Tặng Người yêu</td>
                        
                        <td style="text-align: center;">270.000 đ</td>
                        <td style="text-align: center;">1-1-2024</td>

                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">270.000 đ</td>
                        <td style="text-align: center; color: red;">Đang xử lí</td>

                    </tr>
                </tbody>
                <table style="margin-top: 20px;">
                    <th style="width: 1206px;">Tổng:</th>
                    <th style="right: 100%; text-align: center; ">1.375.000 đ</th>

                </table>
                <button style="  width: 140px;
                height: 45px;
                margin-left: 91%;
                border: 1px solid blue ; margin-top: 20px;"> <a href="thống_kê.html">Quay Lại</a></button>
</div>
</div>
</body>
</html>