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
            <h3>Bài viết mới nhất</h3>
            <div class="article">
                <img src="cattype/aicap.webp" alt="Article 1" style="width:100%">
                <div class="content">
                    <h2>Article 1</h2>
                    <p>This is a summary of article 1...</p>
                    <p>Date: 1st January 2021</p>
                </div>
            </div>
            <div class="article">
                <img src="cattype/chartreux.webp" alt="Article 2" style="width:100%">
                <div class="content">
                    <h2>Article 2</h2>
                    <p>This is a summary of article 2...</p>
                    <p>Date: 2nd January 2021</p>
                </div>
            </div>
            <div class="article">
                <img src="cattype/exotic.webp" alt="Article 3" style="width:100%">
                <div class="content">
                    <h2>Article 3</h2>
                    <p>This is a summary of article 3...</p>
                    <p>Date: 3rd January 2021</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>
