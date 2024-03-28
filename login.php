<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        // Đúng, hàm mysqli_fetch_array() là một hàm có sẵn trong PHP và thuộc vào mô-đun MySQLi (MySQL Improved Extension) của PHP.
        //  Hàm này được sử dụng để lấy một hàng dữ liệu từ kết quả truy vấn và trả về dưới dạng một mảng.
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: admin.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>