<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="userprofile.css">
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
        <h2>Tài khoản cá nhân</h2>
        <div class="avatar-container">
            <img id="avatar" src="https://via.placeholder.com/150" alt="avatar">
        </div>
        <p><strong>Tên:</strong> </p>
        <p><strong>Email:</strong> </p>
        <p><strong>SĐT:</strong> </p>
        <button onclick="editProfile()">chỉnh sửa thông tin </button>
    </div>


    <script src="script.js"></script>
</body>
</html>