<?php
$conn = mysqli_connect("localhost", "root", "", "w_data");

// Kiểm tra xem người dùng đã đăng nhập chưa
session_start();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $hashtag = $_POST['hashtag'];

    // Thông tin về file ảnh
    $thumbnail_name = $_FILES['thumnail']['name'];
    $thumbnail_temp = $_FILES['thumnail']['tmp_name'];

    // Di chuyển file ảnh vào thư mục mong muốn (chẳng hạn là 'uploads/')
    $upload_directory = 'uploads/';
    $thumbnail_path = $upload_directory . $thumbnail_name;
    move_uploaded_file($thumbnail_temp, $thumbnail_path);

    // Lấy user_id từ session (đã đăng nhập)
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    // Kiểm tra xem $user_id có giá trị hay không
    if ($user_id !== null) {
        // Lấy username từ bảng user dựa trên user_id
        $user_query = "SELECT username FROM user WHERE user_id = $user_id";
        echo $user_query;

        $user_result = mysqli_query($conn, $user_query);

        if ($user_result) {
            $user_row = mysqli_fetch_assoc($user_result);
            $author = $user_row['username'];

            // Tiếp tục với câu SQL
            $sql = "INSERT INTO post (title, content, author, thumnail, hashtag, user_id) VALUES ('$title', '$content', '$author', '$thumbnail_path', '$hashtag', $user_id)";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('Location: home.php');
                echo "<script>alert('Đăng bài thành công')</script>";
            } else {
                echo "<script>alert('Đăng bài thất bại')</script>";
            }
        } else {
            echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
        }
    } else {
        echo "Lỗi: Không tìm thấy user_id trong session.";
    }
}
?>