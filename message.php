<?php include 'header.php';
$current_page = 'message';
?>

<!-- // $conn = mysqli_connect("localhost", "root", "", "w_data");
// if (isset($_GET['user_id'])) {
//     $user_id = $_GET['user_id'];
// }
// if (isset($_POST['submit'])) {
//     $description = $_POST['description'];

//     $sql = "INSERT INTO contact (description, user_id) VALUES ('$description', ' $user_id')";
//     $result = mysqli_query($conn, $sql); -->
<!-- 
//     if ($result) {
//         echo "<script>alert('Đơn đã được gửi')</script>";
//     } else {
//         echo "<script>alert('Thất bại')</script>";
//     }
// }


// ?>

// <small>Enter message (optional) and click button "Send"</small>

// <div class="wrapper centered">
//     <article class="letter">
//         <form action="" method="post">

//             <div class="side">
//                 <h1>Contact us</h1>
//                 <p>
//                     <textarea placeholder="Your message" name="description"></textarea>
//                 </p>
//             </div>
//             <div class="side">

//                 <p>
//                     <button style="position: relative;top:100px" type="submit" name="submit"
//                         id="sendLetter">Send</button>
//                 </p>
//             </div>
//         </form>

//     </article>
//     <div class="envelope front"></div>
//     <div class="envelope back"></div>
// </div>
// <p class="result-message centered">Thank you for your message</p> -->
<head>
<link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
<button class="nut-mo-chatbox" onclick="moForm()">Tư vấn ngay</button>
<div class="Chatbox" id="myForm">
  <form action="" class="form-container">
    <h1>Tư Vấn</h1>

    <label for="msg"><b>Cho chúng tôi biết bạn đang cần trợ giúp gì ?</b></label>
    <textarea placeholder="Bạn hãy nhập lời nhắn.." name="msg" required></textarea>

    <button type="submit" class="btn">Gửi</button>
    <button type="button" class="btn nut-dong-chatbox" onclick="dongForm()">Đóng</button>
  </form>
</div>
<div class="container">
  <p>Bắt đầu tư vấn và xem lịch sử tư vấn tại đây</p>
</div>
<script>
    /*Hàm Mở Form*/
function moForm() {
  document.getElementById("myForm").style.display = "block";
}
/*Hàm Đóng Form*/
function dongForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>