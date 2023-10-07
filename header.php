<?php
if (!isset($current_page)) {
    $current_page = ''; // Gán giá trị mặc định cho biến $current_page nếu chưa được định nghĩa
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang Web Chăm Sóc Mèo</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
            <li><a href="cattype.php" <?php if ($current_page === 'cattype') echo 'class="active"'; ?>>Giống Mèo & Đặc Điểm</a></li>
            <li><a href="blog.php" <?php if ($current_page === 'blog') echo 'class="active"'; ?>>Blog</a></li>
            <li><a href="aboutus.php" <?php if ($current_page === 'aboutus') echo 'class="active"'; ?>>Về Chúng Tôi</a></li>
            <li><a href="userlogin.php">Đăng Nhập</a></li>
        </ul>
    </nav>
</header>
