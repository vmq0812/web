<?php
$conn = mysqli_connect("localhost", "root", "123", "typeorm-nestjs");
?>

<?php
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}
?>

<?php

$sql = "SELECT* FROM user WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    $password = $_POST['Password'];
    $fullname = $_POST['Fullname'];
    $email = $_POST['Email'];
    $sdt = $_POST['sdt'];

    $sql = "UPDATE user SET Password = '$password', Fullname = '$fullname', Email = '$email', sdt = '$sdt' WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);

    header("Location: userprofile.php?user_id=$user_id");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="editprofile.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="logo">
            <img src="image/paw.png" alt="hội yêu mèo logo">
            <h1>MeowWisdom</h1>
        </div>
    </header>

    <div class="profile">
        <h2>Chỉnh sửa thông tin cá nhân</h2>
        <form id="edit" method="post">


            <div class="field">
                <label for="fullname">Fullname:</label>
                <input type="text" name="Fullname" placeholder="Fullname" value="<?= $rows['Fullname'] ?>">
            </div>

            <div class="field">
                <label for="fullname">Password:</label>
                <input type="text" name="Password" placeholder="Password" value="<?= $rows['Password'] ?>">
            </div>
            <div class="field">
                <label for="email">Email:</label>
                <input type="text" name="Email" placeholder="Nhập email" value="<?= $rows['Email'] ?>">
            </div>
            <div class="field">
                <label for="sdt">SĐT:</label>
                <input type="text" name="sdt" placeholder="Nhập SĐT" value="<?= $rows['sdt'] ?>">
            </div>

            <button type="submit" name="submit">Cập nhật</button>
        </form>

    </div>


    <script src="script.js"></script>
</body>

</html>