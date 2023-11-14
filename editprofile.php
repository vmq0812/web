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
            <form id="edit">
                <div class="field">
                    <label for="fullname">Họ tên:</label>
                    <input type="text" placeholder="Nhập họ tên">
                </div>
                <div class="field">
                    <label for="email">Email:</label>
                    <input type="text" placeholder="Nhập email">
                </div>
                <div class="field">
                    <label for="sdt">SĐT:</label>
                    <input type="text" placeholder="Nhập SĐT">
                </div>
                <div class="field">
                    <label for="img">Ảnh đại diện</label>
                    <input type="file">
                </div>
                <button type="submit">Cập nhật</button>
            </form>
    </div>


    <script src="script.js"></script>
</body>
</html>