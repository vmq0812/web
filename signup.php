<?php
include('conn.php');
$tb='';
if(isset($_POST['dangky'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $sqlkt = "SELECT*FROM user WHERE Username='$username'";
    $kqkt = kq($sqlkt);
    $count = count($kqkt);
    if($count > 0) {
        $tb = '<span style="color:red">Tên đăng nhập đã tồn tại</span>';
    } else {
        $sql = "INSERT INTO user(Username,Password,Fullname,Email,sdt) VALUES('$username','$password','$fullname','$email','$sdt')";
        ex($sql);
        $tb = '<span style="color:green">Đăng kí thành công</span>';
    }
}
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
            <form id="signup-form" action="" method="POST">
            <?php echo $tb; ?>
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
                            <input type="text" name="fullname" placeholder="Nhập họ tên">
                        </div>
                        <div class="field">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Nhập email">
                        </div>
                        <div class="field">
                            <label for="sdt">SĐT:</label>
                            <input type="text" name ="sdt"placeholder="Nhập SĐT">
                        </div>
                </fieldset>
                <button type="submit" onclick="return kt()" name ="dangky">Đăng Ký</button>
            </form>
        <p>Đã có tài khoản? <a href="userlogin.php">Đăng Nhập</a></p>
        </div>
    </main>
    <script>
        function kt(){
            var mk=document.getElementById('password').value;
            var rmk=document.getElementById('confirm_password').value;
            console.log(mk+rmk);
            if(mk==rmk){
            return true;
            
            }else{
            alert('xác nhận mật khẩu không trùng khớp');
            return false;
            }
        }
    </script>
</body>
</html>
