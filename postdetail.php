<?php
$current_page = 'blog';
include 'header.php';

$conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");

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
    <title>Vietnam - 12 days adventure</title>
    <link rel="stylesheet" href="postdetail.css">
    <link rel="stylesheet" href="postdetail-main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="toast-mess toast-mess--error slide-in-right grid__row disable">
        <i class="fa-solid" id="icon"></i>
        <div class="toast-mess__text">
            <h3></h3>
            <span></span>
        </div>
        <i class="fa-solid fa-xmark" id="close-modal"></i>
    </div>

    <!-- Header -->


    <!-- End of Header -->

    <!-- Body -->
    <div class="container__wrap container">


        <div class="detail-tour__hero grid__row">

            <div class="detail-tour__img">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="img swiper-slide">
                            <img style="align-items: center; margin-right: 100px;" class="img"
                                src="<?= $rows['thumnail'] ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button"></div>
                    <div class="swiper-button-next swiper-button"></div>
                </div>
            </div>

            <div class="detail-tour__description">
                <h1><?= $rows['title'] ?></h1>

                <div class="detail__tour-other grid__row">


                    <div class="detail__tour-remain">
                        <span>Tác giả</span>
                        <p><?= $rows['author'] ?></p>
                    </div>


                    <div class="detail__tour-age">
                        <span>Hashtag</span>
                        <p><?= $rows['hashtag'] ?></p>
                    </div>
                    <div class="detail__tour-itinerary">
                        <span>Itinerary:</span>
                        <p><?= $rows['content'] ?></p>
                    </div>
                </div>
            </div>

        </div>
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