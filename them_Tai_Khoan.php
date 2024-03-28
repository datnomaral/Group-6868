
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="them_tai_khoan.css">
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

<title>Form Đăng nhập</title>
  <style>
    .container {
      width: 700px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .container h2 {
      text-align: center;
    }
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .container input[type="submit"] {
      width: 100%;
      padding: 8px;
      background-color: rgba(255, 140, 0, 1);
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Thêm người dùng</h2>
    <form method="post" action="them_u.php">
     <label for="username">Họ và tên</label>
      <input type="text" id="hoten" name="hoten" placeholder="Nhập họ tên" required>
      <label for="username">Tên đăng nhập:</label>
      <input type="text" id="username" name="user" placeholder="Nhập tên đăng nhập" required>
      <label for="password">Mật khẩu:</label>
      <input type="password" id="password" name="pass"placeholder="Nhập mật khẩu"  required>
      <label for="username">Số điện thoại:</label>
      <input type="text" id="username" name="sdt" placeholder="Nhập số điện thoại"  required>
      <input type="submit" value="Đăng nhập">
    </form>
  </div>
    
</div>
</div>  
</div>
</body>
</html>
