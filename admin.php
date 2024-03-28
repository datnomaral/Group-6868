<!DOCTYPE html>
<html lang="en">
<?php
 include_once 'layout/head.php';
?>
<div class="main-content">
<div class="header-wrapper">
    <div class="header-title">
        

<h2> <a style="cursor: pointer;" href="admin.html"><img src="logo1.jpg" alt=""></a></h2>
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
<div class="card-container">
    <h3 class="main-title">Today's data</h3>
    <div class="card-wrapper">
        <div class="payment-card 
        light-red">
            <div class="card-header">
                <div class="amount">
                    <span class="title">Doanh thu :</span>
                    <span class="amount-value">$ 1.375.000 đ</span>
                    <!-- <div>
                       <i class="fas fa-coins"></i> 
                       <div> -->
                        <span style="text-align: center;" class="card-detail">***************</span>
                       </div>
                       
                    </div>
                </div>

                <div class="payment-card 
        light-red1">
            <div class="card-header">
                <div class="amount">
                    <span class="title">khách hàng thanh toán</span>
                    <span class="amount-value">$ 1.375.000 đ</span>
                    <!-- <div>
                       <i class="fas fa-coins"></i> 
                       <div> -->
                        <span class="card-detail-anh"><img src="logo1.jpg" alt="" width="268" height="55" style="width: 268px; height: 55px;"></span>
                       </div>
                       
                    </div>
                </div>

                <div class="payment-card 
        light-red2">
            <div class="card-header">
                <div class="amount">
                    <span class="title">Khách Hàng Thanh toán:</span>
                    <span class="amount-value"> $ 1.375.000 đ</span>
                    <!-- <div>
                       <i class="fas fa-coins"></i> 
                       <div> -->
                        <span class="card-detail"><img src="việt.jpg"alt="" width="73" height="62" style="width: 73px; height: 62px; border-radius: 100px;">
                        <img src="avatar.jpg" alt="" width="73" height="62" style="width: 73px; height: 62px; border-radius: 100px;">
                        <img src="hưng.jpg" alt=""width="73" height="62" style="width: 73px; height: 62px; border-radius: 100px;">
                        </span>
                       </div>
                       
                    </div>
                </div>

                <div class="payment-card 
        light-red3">
            <div class="card-header">
                <div class="amount">
                    <span class="title">Trạng Thái Đơn Hàng</span>
                    <span class="amount-value">Đã Xử lí đơn hàng thành công.</span>
                    <!-- <div>
                       <i class="fas fa-coins"></i> 
                       <div> -->
                        <span class="card-detail"></span>
                       </div>
                       
                    </div>
                </div>
            </div>

        </div>
        <div class="tabular-wrapper">
            <h3 class="main-title">Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ngày</th> 
                            <th>Khách Hàng</th>
                            <th>Loại Hoa</th>
                            <th>Số Lượng</th>
                            <th style="text-align: center;">Phương Thức Thanh Toán</th>
                            <th>Tổng Thu</th>
                            <th>Sale</th>
                            
                            <th>Xát Nhận</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1-1-2023</td>
                                <td>Nguyễn Thành Việt</td>
                                <td >Mochi Tùng La Hán</td> 
                                <td style="text-align: center;color: green;">1</td>        
                                <td style="text-align: center;">Chuyển khoản</td>
                                <td>295.000 đ</td>
                                <td>0%</td>
                                
                                <td><button>hoàn thành</button>  </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>1-1-2023</td>
                                <td>Nguyễn Thành Đạt</td>
                                <td>Mochi Kim Ngân Bích</td>                               
                                <td style="text-align: center; color: green;">2</td>
                                <td style="text-align: center;">Chuyển khoản</td>                              
                                <td>810.000 đ</td>
                                <td>0%</td>
                                
                                <td><button>hoàn thành</button>  </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>1-1-2023</td>
                                <td>Trương Lê Gia Hưng</td>
                                <td>Mochi Lưỡi Hổ</td>  
                                <td style="text-align: center; color: green;">1</td>                             
                                <td style="text-align: center;">Chuyển khoản</td>
                                <td>270.000 đ</td>
                                <td>0%</td>
                                
                                <td><button>hoàn thành</button>  </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8">
                                    tổng cộng: 1.375.000 đ
                                </td>
                            </tr>
                        </tfoot>
                    </thead>
                </table>
            </div>
    </div>
    <!-- <div class="tabular-wrapper">
        <h3 class="main-title3">Data</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Ngày</th>
                        <th>Loại Hoa</th>
                        <th>Phương Thức Thanh Toán</th>
                        <th>Tổng Thu</th>
                        <th>Sale</th>
                        <th>Trạng Thái</th>
                        <th>Xát Nhận</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div> -->
</div>  
</div>
</body>
</html>