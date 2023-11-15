<?php
$conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");

session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    header('location: userlogin.php');
    exit();
}

// Lấy thông tin người dùng từ session
$username = $_SESSION['username'];

$per = $_SESSION['per'];


if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}

$sql = "SELECT* FROM user WHERE user_id = $user_id";

$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="userprofile.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ... -->


    <div class="profile">


        <h2>Tài khoản cá nhân</h2>
        <div class="avatar-container">
            <img id="avatar" src="https://via.placeholder.com/150" alt="avatar">
        </div>
        <p><strong>Họ tên:</strong> <?= $rows['Fullname'] ?></p>
        <p><strong>Tên đăng nhập:</strong> <?php echo $username; ?></p>
        <!-- Hiển thị các thông tin khác của người dùng nếu có -->
        <p><strong>Email: </strong><?= $rows['Email'] ?> </p>
        <p><strong>Số điện thoại:</strong> <?= $rows['sdt'] ?></p>


        <?php
        $conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");
        $sql = "SELECT * FROM user where username='$username'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_array($result);

        ?>
        <a href="editprofile.php?user_id=<?= $rows['user_id'] ?>"
            style="text-decoration: none; padding: 10px 15px; border-radius:5px;color:#000;background-color:#fff; margin-top:20px;border:2px solid #000">Chỉnh
            sửa
            thông tin </a>
    </div>
    <!-- ... -->
</body>

</html>