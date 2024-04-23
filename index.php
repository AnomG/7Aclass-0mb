<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Employee Chat</h2>
        <div id="chat-container" class="chat-container"></div>
        <input type="text" id="message-input" placeholder="Type your message" class="message-input">
        <button id="send-button" class="send-button">Send</button>

        <script src="chat.js"></script>
    </div>
</body>
</html>
