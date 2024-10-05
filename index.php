<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link href="https://img.icons8.com/color/48/hearts.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/chatstyle.css"> <!-- Assuming this contains your custom styles -->
    <style>
        #chat-box {
            height: 400px; /* Set the height for the chat area */
            overflow-y: auto; /* Enable vertical scrolling */
            background-color: #f8f9fa; /* Optional: set a background color for chat area */
            border-radius: 0.5rem; /* Optional: add rounded corners */
            padding: 10px; /* Optional: add some padding */
        }
    </style>
</head>
<body>
<section>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card" id="chat1">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 chat-header">
                        <i class="fas fa-angle-left text-white"></i>
                        <p class="mb-0 fw-bold text-white" style="color: green !important;">Live Chat</p>
                        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a> <!-- Logout button -->
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div id="chat-box">
                            <!-- Chat messages will be dynamically loaded here -->
                        </div>

                        <div class="form-outline mt-3">
                            <textarea class="form-control" id="message" rows="4" placeholder="Type your message"></textarea>
                        </div>

                        <button class="btn send-button mt-3" onclick="sendMessage()">Send <i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function sendMessage() {
        const messageInput = $('#message');
        const message = messageInput.val().trim();

        if (message !== '') {
            $.ajax({
                type: 'POST',
                url: 'send_message.php',
                data: { message: message },
                success: function(response) {
                    appendMessageToChat(message);
                    messageInput.val(''); // Clear the input
                    scrollToBottom(); // Scroll to the bottom after sending a message
                },
                error: function(xhr, status, error) {
                    console.error('Error sending message:', error);
                }
            });
        }
    }

    function appendMessageToChat(message) {
        const chatBox = $('#chat-box');
        const messageElement = $('<div></div>').text(message); // Customize this (e.g., add sender info)
        messageElement.addClass('chat-message'); // Optional: add a class for styling
        chatBox.append(messageElement);
        scrollToBottom(); // Scroll to the bottom after appending a new message
    }

    function scrollToBottom() {
        const chatBox = $('#chat-box');
        chatBox.scrollTop(chatBox[0].scrollHeight); // Scroll to the bottom
    }

    // Load messages when the page loads
    $(document).ready(function() {
        loadMessages(); // Call loadMessages function if implemented
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
<script src="./js/chat.js"></script>
</body>
</html>
