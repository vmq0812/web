<?php
// Kiểm tra xem người dùng đã đăng nhập chưa
session_start();

if (isset($_SESSION['user_id'])) {
    // Hủy tất cả các biến session
    $_SESSION = array();

    // Hủy session
    session_destroy();

    // Chuyển hướng đến trang đăng nhập hoặc trang chính của bạn
    header("Location: userlogin.php"); // Thay 'login.php' bằng trang bạn muốn chuyển hướng đến
    exit();
} else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: userlogin.php"); // Thay 'login.php' bằng trang bạn muốn chuyển hướng đến
    exit();
}
?>
