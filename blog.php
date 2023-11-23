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
    <style>
    .news-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .news-article {
        width: calc(33.33% - 10px); /* 33.33% width cho mỗi bài viết và trừ đi margin giữa chúng */
        margin-bottom: 20px;
        box-sizing: border-box; /* Đảm bảo rằng padding và border không làm tăng kích thước thực tế */
    }

    .news-article img {
        max-width: 100%;
        height: auto;
    }
    </style>

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
    
    <div class="new-con">
        <div class="one-line">
            <h2>Hashtag<h2>
                <div class="hastag">
                    <ul class="hastag-list">
                        <li class="ht"><a href = #" class="all">All</a></li>
                        <li class="ht"><a href = #" class="lit">#Thuvi</a></li>
                        <li class="ht"><a href = #" class="lit">#Quandiem</a></li>
                        <li class="ht"><a href = #" class="lit">#Chiase</a></li>
                        <li class="ht"><a href = #" class="lit">#Nhanbiet</a></li>
                        <li class="ht"><a href = #" class="lit">#Fun</a></li>
                        <li class="ht"><a href = #" class="lit">#Luuy</a></li>
                    </ul>
                </div>
        </div>
    </div>

    
    <div class="news-section">

    <?php
    $conn = mysqli_connect("localhost", "root", "", "w_data");
    $sql = "SELECT * FROM post ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        foreach ($result as $sanpham) {

    ?>

    <div class="news-article">

        <img style="width:300px;height:200px" src="<?= $sanpham['thumnail'] ?>" alt="Image placeholder">

        <h2><?= $sanpham['title'] ?></h2>

        <p>
            <?php
                    $content = $sanpham['content'];
                    $maxWords = 20;

                    $wordCount = str_word_count($content);
                    $words = explode(' ', $content);

                    if ($wordCount > $maxWords) {
                        $shortenedContent = implode(' ', array_slice($words, 0, $maxWords));
                        echo $shortenedContent . '...';
                    } else {
                        echo $content;
                    }
                    ?>
        </p>

        <p>Tác giả:  <?= $sanpham['author'] ?></p>

        <p>Hashtag:  <?= $sanpham['hashtag'] ?></p>


        <p><?= $sanpham['post_time'] ?></p>

        <a href="postdetail.php?post_id=<?= $sanpham['post_id'] ?>">Đọc thêm</a>

    </div>

            <?php

                }
            }
            ?>

</div>
                    
</body>
</html>
<?php include 'footer.php'; ?>
