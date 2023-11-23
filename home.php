
<?php include 'header.php';?>


<style>
   

    .news-section {
  margin: 16px 32px;
  overflow-x: auto;
    /* display: flex; */
  align-items: center;
  scroll-snap-type: x mandatory;
    }


    .news-article {
        flex: 1 0 30%;
  aspect-ratio: 1;
  flex-flow: column nowrap;
  display: flex;
  justify-content: center;
  align-items: center;
  scroll-snap-align: center;
}
    

    @media (max-width: 600px) {
        .news-article {
            flex: 1 0 90%;
        }
    }
</style>

<div class="slider-container">
    <div class="slider-content">
        <div class="slide">
            <img src="image/amigo-eugenito-5WPEDMgmQiw-unsplash.jpg" alt="" width="1200" height="500">
        </div>
        <div class="call-to-action">
            <div class="call-to-action-content">
                <h1>CHIA SẺ CHO CỘNG ĐỒNG NHỮNG GÌ BẠN BIẾT!</h1><br>
                <p>Với mục đích xây dựng cộng đồng những người yêu mèo </p>
                <p>Hãy chia sẻ cho chúng tôi những kiến thức mà bạn có, cũng như học hỏi thêm những điều mới mẻ ngay nhé
                </p>
                <a href="dangbai.php" class="register-button">Tạo bài viết </a>
            </div>
        </div>
    </div>
</div>

<div class="reliable-sources">
    <h2>Các Nguồn Thông Tin Đáng Tin Cậy</h2>
    <p>Chúng tôi cung cấp các nguồn thông tin uy tín và chất lượng để bạn có thể chăm sóc mèo của mình một cách tốt
        nhất.</p>
    <div class="img-con">
        <div class="img1">
            <img src="https://www.idausa.org/assets/images/ida-logo.svg" alt="1">
        </div>
        <div class="img2">
            <img src="https://pngimg.com/d/wikipedia_PNG30.png" alt="2">
        </div>
        <div class="img3">
            <img src="https://thesocialcat.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo-navbar.7c1c7228.png&w=1080&q=75"
                alt="3">
        </div>
        <div class="img4">
            <img src="https://cdn-djur.newsner.com/wp-content/uploads/sites/3/2019/08/28085251/We-Love-Animals-header.png"
                alt="4">
        </div>
    </div>
</div>

<div class="top-news-container"">
    <div class=" news-heading">
    <h1>Bài viết nổi bật</h1>
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

        <p><?= $sanpham['post_time'] ?></p>

        <a href="postdetail.php?post_id=<?= $sanpham['post_id'] ?>">Đọc thêm</a>

    </div>

    <?php

        }
    }
    ?>

</div>
<!-- <div class="hastag-news">
    <div class="box">
        <h1 class="ft">#QuanDiem</h1>
    </div>
    <div class="news-section">

        <?php
        $conn = mysqli_connect("localhost", "root", "", "w_data");
        $sql = "SELECT * FROM post WHERE hashtag='hashtag1'";
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
                        $maxWords = 15;

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

            <div style="display: flex;column-gap:100px">
                <p><?= $sanpham['author'] ?></p>

                <p><?= $sanpham['hashtag'] ?></p>
            </div>

            <p><?= $sanpham['post_time'] ?></p>

            <a href="postdetail.php?post_id=<?= $sanpham['post_id'] ?>">Đọc thêm</a>

        </div>

        <?php

            }
        }
        ?>

    </div>

</div>
<div class="hastag-news">
    <div class="box">
        <h1 class="ft">#ThuVi</h1>
    </div>
    <div class="news-section">

        <?php
        $conn = mysqli_connect("localhost", "root", "", "w_data");
        $sql = "SELECT * FROM post WHERE hashtag='hashtag2'";
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
                        $maxWords = 15;

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

            <div style="display: flex;column-gap:100px">
                <p><?= $sanpham['author'] ?></p>

                <p><?= $sanpham['hashtag'] ?></p>
            </div>

            <p><?= $sanpham['post_time'] ?></p>

            <a href="postdetail.php?post_id=<?= $sanpham['post_id'] ?>">Đọc thêm</a>

        </div>

        <?php

            }
        }
        ?>

    </div>
</div>
<div class="hastag-news">
    <div class="box">
        <h1 class="ft">#ChiaSe</h1>
    </div>
    <div class="news-section">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "w_data");
        $sql = "SELECT * FROM post WHERE hashtag='hashtag3'";
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
                        $maxWords = 15;

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

            <div style="display: flex;column-gap:100px">
                <p><?= $sanpham['author'] ?></p>

                <p><?= $sanpham['hashtag'] ?></p>
            </div>

            <p><?= $sanpham['post_time'] ?></p>

            <a href="postdetail.php?post_id=<?= $sanpham['post_id'] ?>">Đọc thêm</a>

        </div>

        <?php

            }
        }
        ?>
    </div>
</div> -->


<?php include 'footer.php'; ?>