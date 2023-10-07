<?php
session_start();
include 'conn.php';

// Kiểm tra xem có thông báo đăng ký thành công trong session hay không
if (isset($_SESSION["success_message"])) {
    echo $_SESSION["success_message"];
    // Xóa thông báo sau khi đã hiển thị
    unset($_SESSION["success_message"]);
}

// Tiếp tục xử lý đăng nhập hoặc đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) { // Xử lý đăng nhập
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Sử dụng Prepared Statements để xác minh thông tin đăng nhập
        $stmt = $conn->prepare("SELECT username, password FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user["password"])) {
            // Đăng nhập thành công, thiết lập phiên làm việc và chuyển hướng
            $_SESSION["username"] = $username;
            header("Location: home.php"); // Thay thế bằng trang chính sau khi đăng nhập
            exit;
        } else {
            // Thông tin đăng nhập không hợp lệ
            echo "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
        $stmt->close();
    } elseif (isset($_POST["register"])) { // Xử lý đăng ký
        $reg_username = $_POST["reg_username"];
        $reg_password = $_POST["reg_password"];
        $confirm_password = $_POST["confirm_password"];

        // Kiểm tra xem mật khẩu và xác nhận mật khẩu có trùng khớp không
        if ($reg_password === $confirm_password) {
            // Tiếp tục xử lý đăng ký và lưu thông tin vào cơ sở dữ liệu
            // Đảm bảo mã hoá mật khẩu trước khi lưu vào cơ sở dữ liệu
            $hashed_password = password_hash($reg_password, PASSWORD_DEFAULT);

            // Sử dụng Prepared Statements để thêm thông tin người dùng vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $reg_username, $hashed_password);

            if ($stmt->execute()) {
                $_SESSION["success_message"] = "Đăng ký thành công! Đăng nhập vào tài khoản của bạn <a href='login.php'>tại đây</a>.";
                header("Location: login.php");
                exit;
            } else {
                echo "Lỗi: " . $stmt->error;
            }
            $stmt->close();
        } else {
            // Mật khẩu và xác nhận mật khẩu không trùng khớp
            echo "Mật khẩu và xác nhận mật khẩu không trùng khớp.";
        }
    }
}

$conn->close();
?>
