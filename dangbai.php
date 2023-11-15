<?php
$conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $hashtag = $_POST['hashtag'];

    // Thông tin về file ảnh
    $thumbnail_name = $_FILES['thumnail']['name'];
    $thumbnail_temp = $_FILES['thumnail']['tmp_name'];

    // Di chuyển file ảnh vào thư mục mong muốn (chẳng hạn là 'uploads/')
    $upload_directory = 'uploads/';
    $thumbnail_path = $upload_directory . $thumbnail_name;
    move_uploaded_file($thumbnail_temp, $thumbnail_path);

    // Tiếp tục với câu SQL
    $sql = "INSERT INTO post (title, content, author, thumnail, hashtag) VALUES ('$title', '$content', '$author', '$thumbnail_path', '$hashtag')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: home.php');
        echo "<script>alert('Đăng bài thành công')</script>";
    } else {
        echo "<script>alert('Đăng bài thất bại')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangbai.css">
</head>

<body>

    <div class='signup-container'>
        <div class='left-container'>
            <h1>
                <i class='fas fa-paw'></i>
                PUPASSURE
            </h1>
            <div class='puppy'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
            </div>
        </div>
        <div class='right-container'>

            <form action="" method="post" enctype="multipart/form-data">
                <header>

                    <h1>Yay, puppies! Ensure your pup gets the best care!</h1>

                    <div class='set'>

                        <div class='pets-name'>
                            <label for='pets-name'>Title</label>
                            <input id='pets-name' name="title" placeholder="Tiêu đề" type='text'>
                        </div>

                        <div class='pets-name'>
                            <label for='pets-name'>Thumbnail</label>
                            <input id='pets-name' name="thumnail" type='file'>
                        </div>


                    </div>

                    <div class='set'>

                        <div class='pets-breed'>
                            <label for='pets-breed'>Content</label>
                            <input id='pets-breed' name="content" placeholder="Nội dung" type='text'>
                        </div>

                        <div class='pets-birthday'>
                            <label for='pets-birthday'>Author</label>
                            <input id='pets-birthday' name="author" placeholder='Tên tác giả' type='text'>
                        </div>


                    </div>

                    <div class="set">
                        <div class='pets-birthday'>
                            <label for='pets-birthday'>Post Time</label>
                            <input id='pets-birthday' name="post_time" placeholder='placeholder=' MM/DD/YYYY''
                                type='date'>
                        </div>

                        <div class='pets-weight'>
                            <label for='pet-weight-0-25'>Hashtag</label>
                            <select name="hashtag" id="pets-breed" style="padding: 10px 15px;">
                                <option value="hashtag1">hashtag1</option>
                                <option value="hashtag2">hashtag2</option>
                                <option value="hashtag3">hashtag3</option>
                                <option value="hashtag4">hashtag4</option>
                                <option value="hashtag5">hashtag5</option>
                                <option value="hashtag6">hashtag6</option>
                            </select>
                        </div>
                    </div>





                </header>

                <footer>
                    <div class='set'>
                        <button id='back'><a href="home.php" style="text-decoration: none; ">Back</a></button>
                        <button id='next' name="submit" type="submit">Submit</button>
                    </div>
                </footer>

            </form>
        </div>
    </div>
</body>

</html>