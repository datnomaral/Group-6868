<?php
// Kết nối cơ sở dữ liệu
require_once "connection.php";

// Viết câu lệnh truy vấn
$lietke_sql = "SELECT * FROM add_tv";

// Thực thi câu lệnh
$result = mysqli_query($conn, $lietke_sql);

// Duyệt qua và in ra
while ($r = mysqli_fetch_assoc($result)) {
    echo $r['hoten'] . "-" . $r['username'] . "-" . $r['password'] . "-" . $r['phone'];
}
?>