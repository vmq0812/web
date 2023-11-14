<?php 
$current_page = 'message';
include 'header.php'; 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>message</title>
    <link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>

<div class="container">
 <div class="msg-container" id="chat-box"></div>
 <div class="input-container">
    <input type="text" placeholder="Bạn cần tư vấn gì ?" id="msg" name="msg" required>
    <button onclick="sendMessage()">Send</button>
 </div>
</div>

<script>
function sendMessage() {
    var message = document.getElementById("msg").value;
    var chatBox = document.getElementById("chat-box");
    
    var msgDiv = document.createElement("div");
    msgDiv.className = "msg sent";
    msgDiv.textContent = message;
    
    chatBox.appendChild(msgDiv);

    var receivedMsgDiv = document.createElement("div");
    receivedMsgDiv.className = "msg";
    receivedMsgDiv.textContent = "Chúng tôi hiện đang bận";
    chatBox.appendChild(receivedMsgDiv);

    document.getElementById("msg").value = "";
}
</script>

</body>
</html>
