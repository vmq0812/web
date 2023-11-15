<?php
include('conn.php');
$tb = '';
if (isset($_POST['dangnhap'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sqlkt = "SELECT*FROM user WHERE Username='$username' AND Password='$password'";
  $kqkt = kq($sqlkt);
  $cout = count($kqkt);
  if ($cout > 0) {
    session_start();
    $_SESSION['username'] = $username;
    // $_SESSION['per'] = $per;
    $per = $kqkt[0]['per'];
    if ($per == '0') {
      header('location:home.php');
    } elseif ($per == '1') {
      header('location:blog.php');
    } else {
      header('location:cattype.php');
    }
  } else {
    $tb = '<span style="color:red">Tài khoản hoặc mật khẩu sai, vui lòng thử lại<br></span>';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Trang Đăng Nhập</title>
    <link rel="stylesheet" type="text/css" href="userlogin.css">
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
            <form action="" method="POST">
                <?php echo $tb ?>
                <field>
                    <label for="username">Tên đăng nhập:</label>
                    <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
                </field>
                <field>
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                </field>
                <button type="submit" name="dangnhap">Đăng Nhập</button>
            </form>
            <p>Chưa có tài khoản? <a href="signup.php">Tạo tài khoản</a></p>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>

</html>