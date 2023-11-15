<?php 
session_start();
$current_page = 'message';
include 'header.php';
include ('conn.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>message</title>
    <link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="content" placeholder="Nhập nội dung tư vấn">
        <input type="submit" name ="gui" value="Gửi">
</form>


<script>
</script>

</body>
</html>
