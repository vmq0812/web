<?php
if (!isset($current_page)) {
    $current_page = '';
}
?>

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


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Trang Web Chăm Sóc Mèo</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="message.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="logo">
            <img src="image/paw.png" alt="logo">
            <h1><a href="home.php">MeowWisdom</a></h1>
        </div>
        <nav>
            <ul>

                <?php
                $conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");
                $sql = "SELECT * FROM user where username='$username'";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_fetch_array($result);

                ?>
                <li><a href="cattype.php" <?php if ($current_page === 'cattype') echo 'class="active"'; ?>>Giống Mèo &
                        Đặc Điểm</a></li>
                <li><a href="blog.php" <?php if ($current_page === 'blog') echo 'class="active"'; ?>>Bài Viết</a></li>
                <li><a href="message.php?user_id=<?= $rows['user_id'] ?>"
                        <?php if ($current_page === 'message') echo 'class="active"'; ?>>Tư Vấn</a>
                </li>
                <li><a href="aboutus.php" <?php if ($current_page === 'aboutus') echo 'class="active"'; ?>>Về Chúng
                        Tôi</a></li>

                <li><a href="userprofile.php?user_id=<?= $rows['user_id'] ?>"> <?php echo $username; ?></a></li>

                <?php


                ?>


            </ul>
        </nav>
    </header>