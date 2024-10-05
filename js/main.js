function sendMessage() {
    let message = document.getElementById('message').value;
    if (message !== '') {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/send_message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('message').value = ''; // Clear the input
            }
        };
        xhr.send('message=' + encodeURIComponent(message));
    }
}

function loadMessages() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'php/get_messages.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('chat-box').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

// Fetch messages every 2 seconds
setInterval(loadMessages, 2000);
