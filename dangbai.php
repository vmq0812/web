<?php

include 'process_post.php';
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

    <div class='right-container'>

    <form action="" method="post" enctype="multipart/form-data">
    <header>
        <h1 style="font-size: 24px;">Chú ý sử dụng ngôn ngữ phù hợp khi đăng tải bài viết của bạn nhé!</h1>
        <div class='set'>
            <div class='pets-name'>
                <label for='title'>Tiêu đề</label>
                <input id='title' name="title" placeholder="Nội dung tiêu đề" type='text' required>
            </div>
            <div class='pets-name'>
                <label for='thumnail'>Ảnh</label>
                <input id='thumnail' name="thumnail" type='file' required>
            </div>
        </div>
        <div class='set'>
            <div class='pets-breed'>
                <label for='content'>Nội dung bài viết</label>
                <textarea id='content' name="content" placeholder="Nội dung" rows="15" cols="" required></textarea>
            </div>
            <div class='pets-weight'>
                <label for='hashtag'>Hashtag</label>
                <select name="hashtag" id="hashtag" style="padding: 10px 15px;">
                    <option value="#ThuVi">#ThuVi</option>
                    <option value="#QuanDiem">#QuanDiem</option>
                    <option value="#ChiaSe">#ChiaSe</option>
                    <option value="#NhanBiet">#NhanBiet</option>
                    <option value="#Fun">#Fun</option>
                    <option value="#LuuY">#LuuY</option>
                </select>
            </div>
        </div>
    </header>
    <footer>
        <div class='set'>
            <button id='back'><a href="home.php" style="text-decoration: none;">Back</a></button>
            <button id='next' name="submit" type="submit">Submit</button>
        </div>
    </footer>
</form>

    </div>
</div>

</body>

</html>