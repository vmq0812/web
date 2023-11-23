<?php
$current_page = 'blog';
include 'header.php';

$conn = mysqli_connect("localhost", "root", "", "w_data");

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
}

$sql = "SELECT* FROM post WHERE post_id = $post_id";

$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postdetail
    </title>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
  

  --fontText: 'Merriweather', serif;
  --fontUI: 'Arial', sans-serif;

  --transitionDuration: 0.4s;
  --transitionEasing: cubic-bezier(0.25, 0.1, 0.25, 1);

  --spacing: 3rem;
  --titleFontSize: 5rem;
  --subtitleFontSize: 2rem;
}

@media (min-width: 48em) {
  :root {
    --spacing: 3.6rem;
    --titleFontSize: 7rem;
    --subtitleFontSize: 2.2rem;
  }
}

@media (min-width: 64em) {
  :root {
    --spacing: 6.8rem;
    --titleFontSize: 10rem;
    --subtitleFontSize: 2.4rem;
  }
}

img {
  max-width: 100%;
}



.title {
  margin-left: 40px;
  margin-top: 0.96em;
  margin-bottom: 0.1em;
  font-size: 20px;
  font-weight: normal;
  line-height: 1.15;
  letter-spacing: 0.002em;
}

.author,
.author a {
  color: var(--neutral);
}

.author {
  margin-left: 40px;
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  font-family: var(--fontUI);
  font-size: 25px;
}

.author a {
  text-underline-position: under;
}

.subtitle {
  margin-top: 20px;
  margin-left: 40px;
text-align: justify;
  max-width: 1000px;
  font-size: 22px;
  line-height: 1.8;
  margin-bottom: 50px;
}

.text {
  font-size: 22px;
  line-height: 1.75;
  margin-top: 1em;
  letter-spacing: 0.015em;
}
.detail-tour__img{
  margin-top: 20px;
  margin-left: 40px;

}




    </style>    
       
</head>

<body>


    <!-- Header -->


    <!-- End of Header -->

    <!-- Body -->


    <!-- #region 
  -->     
  <div class="title">
            <h1><?= $rows['title'] ?></h1>
        </div>

        <div class="author" style="display:inline;">
            <div class="author">
                <span>Tác giả:</span>
                    <p><?= $rows['author'] ?></p>
            </div>
            <div class="author">
                <p><?= $rows['hashtag'] ?></p>
            </div>
        </div>

        <div class="detail-tour__hero grid__row">
            <div class="detail-tour__img">
                <img class="img" src="<?= $rows['thumnail'] ?>" alt="">
            </div>
        </div>

      
        <div class="subtitle">
            <p><?= $rows['content'] ?></p>
        </div>

    <!-- End of Body -->

    <!-- Footer -->

    <!-- End of Footer -->
    <script src="../js/main.js"></script>
    <script>
    countNumberOfTraveler();
    swiper();
    validateBooking();
    closeToastMessage();
    getNow();
    </script>

</body>

</html>
<?php include 'footer.php'; ?>