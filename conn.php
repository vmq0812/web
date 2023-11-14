<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "w_data"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
mysqli_select_db($conn,$database);
?>
