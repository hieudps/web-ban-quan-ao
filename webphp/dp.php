<?php
$host = "localhost";
$username = "root";
$password = "";         // Mật khẩu rỗng
$database = "qlhb1";    // Thay bằng tên database của bạn

$conn = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công!";
?>