<?php
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra xem tên đăng nhập và mật khẩu không được bỏ trống
    if (empty($username) || empty($password)) {
        echo "Tên đăng nhập và mật khẩu không được bỏ trống.";
    } elseif ($password !== $confirm_password) {
        echo "Mật khẩu và xác nhận mật khẩu không trùng khớp.";
    } else {
        // Kiểm tra xem tên đăng nhập đã tồn tại trong cơ sở dữ liệu chưa
        $stmt = $conn->prepare("SELECT username FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác.";
        } else {
            // Đảm bảo mã hoá mật khẩu trước khi lưu vào cơ sở dữ liệu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Sử dụng Prepared Statements để thêm thông tin người dùng vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $_SESSION["success_message"] = "Đăng ký thành công! Đăng nhập vào tài khoản của bạn <a href='userlogin.php'>tại đây</a>.";
                header("Location: login.php");
                exit;
            } else {
                echo "Lỗi: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang Đăng Ký</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="image/paw.png" alt="hội yêu mèo logo">
            <h1>MeowWisdom</h1>
        </div>
    </header>

    <main>
        <div class="login-container">
            <h2>Đăng Ký</h2>
            <form action="signup.php" method="POST">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">

                <label for="confirm_password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu">

                <button type="submit">Đăng Ký</button>
            </form>
            <p>Đã có tài khoản? <a href="userlogin.php">Đăng Nhập</a></p>
        </div>
        <div class="background-overlay"></div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
