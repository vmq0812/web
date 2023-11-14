
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
            <form id="signup-form" action="signup.php" method="POST">
                <fieldset>
                <legend>Thông tin tài khoản</legend>
                    <div class="field">
                        <label for="username">Tên đăng nhập:</label>
                        <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="field">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="field">
                        <label for="confirm_password">Xác nhận mật khẩu:</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu">
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Thông tin cá nhân</legend>
                        <div class="field">
                            <label for="fullname">Họ tên:</label>
                            <input type="text" placeholder="Nhập họ tên">
                        </div>
                        <div class="field">
                            <label for="email">Email:</label>
                            <input type="text" placeholder="Nhập email">
                        </div>
                        <div class="field">
                            <label for="sdt">SĐT:</label>
                            <input type="text" placeholder="Nhập SĐT">
                        </div>
                        <div class="field">
                            <label for="img">Ảnh đại diện</label>
                            <input type="file">
                        </div>
                </fieldset>
                <button type="submit">Đăng Ký</button>
            </form>
        <p>Đã có tài khoản? <a href="userlogin.php">Đăng Nhập</a></p>
        <p id="error-message" style="color: red;"></p>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
