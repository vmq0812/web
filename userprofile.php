<?php
// Include file kết nối đến cơ sở dữ liệu
include 'conn.php';

// Kiểm tra xem người dùng đã đăng nhập hay chưa (đây chỉ là ví dụ đơn giản, bạn cần xác thực đăng nhập theo cách an toàn hơn trong ứng dụng thực tế)
$logged_in = true; // Điều này cần được xác định dựa trên trạng thái đăng nhập thực tế

if ($logged_in) {
    // Lấy thông tin của người dùng từ cơ sở dữ liệu
    $user_id = 1; // Đây là ví dụ, bạn cần thay đổi giá trị này dựa trên đăng nhập của người dùng
    $stmt = $conn->prepare("SELECT id, name, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($id, $name, $email);
    
    // Kiểm tra xem có kết quả hay không
    if ($stmt->fetch()) {
        // Hiển thị thông tin cá nhân
        echo "ID: " . $id . "<br>";
        echo "Tên: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        
        // Nút chỉnh sửa thông tin cá nhân
        echo '<form action="process_update_profile.php" method="post">';
        echo '  <label for="newName">Tên mới:</label>';
        echo '  <input type="text" id="newName" name="newName"><br>';
        echo '  <label for="newEmail">Email mới:</label>';
        echo '  <input type="text" id="newEmail" name="newEmail"><br>';
        echo '  <input type="submit" value="Lưu">';
        echo '</form>';
    } else {
        echo "Không tìm thấy thông tin cá nhân cho người dùng này.";
    }
    
    $stmt->close();
} else {
    echo "Vui lòng đăng nhập để xem thông tin cá nhân.";
}

// Đóng kết nối đến cơ sở dữ liệu (nếu cần)
$conn->close();
?>

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