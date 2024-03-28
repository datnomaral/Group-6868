<?php
// Kiểm tra tồn tại của biến 'sid'
if(isset($_GET['sid'])) {
    // Lấy dữ liệu id cần xóa
    $id = $_GET['sid'];
    echo "$id";

    // Kết nối cơ sở dữ liệu
    require_once "connection.php";

    // Câu lệnh SQL
    $xoa_sql = "DELETE FROM add_tv WHERE id = '$id'";
    mysqli_query($conn, $xoa_sql);

    // Trở về trang infor_user
    header("Location: infor_user.php");
    exit();
} else {
    echo "Missing 'sid' parameter.";
}
?>