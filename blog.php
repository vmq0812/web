<?php 
$current_page = 'blog';
include 'header.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="blog.css">
</head>
<body>
    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Bạn tìm gì nhỉ ?">
                <button type="submit" class="searchButton">
                    <img src="image/loupe.png" alt="Search Icon">
                </button>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
              <h1>#HASTAG</h1>
                <li><a href="#">KinhNhiem</a></li>
                <li><a href="#">Fun</a></li>
                <li><a href="#">LuuY</a></li>
                <li><a href="#">MeoCon</a></li>
                <li><a href="#">Benh</a></li>
               <li><a href="#">GiongMeo</a></li>
               <li><a href="#">ThuVi</a></li>
               <li><a href="#">ThucAnMeo</a></li>
               <li><a href="#">CatMeMe</a></li>
              <li><a href="#">ChiPhi</a></li>
            </ul>
        </div>
        <div class="acticle-container">
            <div class="article">
                <span class="hashtag">#Fun</span>
                <h2>Tiêu đề bài báo 1</h2>
                    <p>Đây là đoạn ngắn nội dung của bài báo 1.</p>
                    <p class="author">Tác giả: MinhQuan</p>
                    <p class="date">Ngày đăng: 06/10/2023</p>
            </div>
            <div class="article">
                <span class="hashtag">#Fun</span>
                    <h2>Tiêu đề bài báo 1</h2>
                        <p>Đây là đoạn ngắn nội dung của bài báo 1.</p>
                        <p class="author">Tác giả: MinhQuan</p>
                        <p class="date">Ngày đăng: 06/10/2023</p>
            </div>
            <div class="article">
                <span class="hashtag">#Fun</span>
                    <h2>Tiêu đề bài báo 1</h2>
                        <p>Đây là đoạn ngắn nội dung của bài báo 1.</p>
                        <p class="author">Tác giả: MinhQuan</p>
                        <p class="date">Ngày đăng: 06/10/2023</p>
            </div>
            <div class="article">
                <span class="hashtag">#Fun</span>
                    <h2>Tiêu đề bài báo 1</h2>
                        <p>Đây là đoạn ngắn nội dung của bài báo 1.</p>
                        <p class="author">Tác giả: MinhQuan</p>
                        <p class="date">Ngày đăng: 06/10/2023</p>
            </div>
            <div class="article">
                <span class="hashtag">#Fun</span>
                    <h2>Tiêu đề bài báo 1</h2>
                        <p>Đây là đoạn ngắn nội dung của bài báo 1.</p>
                        <p class="author">Tác giả: MinhQuan</p>
                        <p class="date">Ngày đăng: 06/10/2023</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>
