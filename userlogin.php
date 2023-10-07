<?php
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra xem tên đăng nhập và mật khẩu không được bỏ trống
    if (empty($username) || empty($password)) {
        echo "Tên đăng nhập và mật khẩu không được bỏ trống.";
    } else {
        // Kiểm tra xem tên đăng nhập tồn tại trong cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT username, password FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                // Đăng nhập thành công, thiết lập phiên làm việc và chuyển hướng
                $_SESSION["username"] = $username;
                header("Location: home.php"); // Chuyển hướng đến trang chính sau khi đăng nhập
                exit();
            } else {
                echo "Mật khẩu không đúng.";
            }
        } else {
            echo "Tên đăng nhập không tồn tại.";
        }

        $stmt->close();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang Đăng Nhập</title>
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
            <h2>Đăng Nhập</h2>
            <form action="login.php" method="POST">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">

                <button type="submit">Đăng Nhập</button>
            </form>
            <p>Chưa có tài khoản? <a href="signup.php">Tạo tài khoản</a></p>
        </div>
        <div class="background-overlay"></div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
