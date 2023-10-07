<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost"; // Thay đổi thành tên máy chủ của bạn
$username = "root"; // Thay đổi thành tên người dùng của bạn
$password = ""; // Thay đổi thành mật khẩu của bạn (nếu có)
$database = "w_data"; // Thay đổi thành tên cơ sở dữ liệu của bạn

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

?>
