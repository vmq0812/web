
<div>
    <h2>View Message</h2>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "w_data");

    if (isset($_GET['contact_id'])) {
        $contact_id = $_GET['contact_id'];

        // Truy vấn nội dung tin nhắn từ bảng contact
        $sql = "SELECT * FROM contact WHERE contact_id = '$contact_id'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $user_id = $row['user_id'];
            $description = $row['description'];
            $created_at = $row['created_at'];

            echo "<p><strong>User ID:</strong> $user_id</p>";
            echo "<p><strong>Description:</strong> $description</p>";
            echo "<p><strong>Created At:</strong> $created_at</p>";
        } else {
            echo "<p>Message not found.</p>";
        }
    } else {
        echo "<p>Invalid contact ID.</p>";
    }

    mysqli_close($conn);
    ?>

</div>

