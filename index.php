<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application API Documentation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1, h2, h3 {
            color: #343a40;
        }
        pre {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }
        .endpoint {
            background-color: #e7f3fe;
            border-left: 4px solid #2196F3;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
        }
        .example {
            background-color: #d4edda;
            border-left: 4px solid #28a745;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
        }
        .footer {
            margin-top: 30px;
            padding: 10px;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
        a {
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container my-4">
        <h1 class="text-center">Chat Application API Documentation</h1>
        <hr>

        <h2>Overview</h2>
        <p>The Chat Application is a real-time messaging platform that allows users to register, log in, send messages, and fetch chat history. The API is built using PHP and interacts with a MySQL database for data storage.</p>

        <h3>Live Application URL</h3>
        <ul>
            <li><strong>Main Application:</strong> <a href="http://chatappp.free.nf/">http://chatappp.free.nf/</a></li>
            <li><strong>API Endpoint:</strong> <a href="http://chatappp.free.nf/api/">http://chatappp.free.nf/api/</a></li>
            
        </ul>

        <strong>CONTRIBUTE: </strong> <a href="https://github.com/vishnu1100/ChatApp_backend_server_API_PHP" target="_blank"> YO CLICK HERE IF YOU DARE</a>

        <hr>

        <h2>API Endpoints</h2>

        <div class="endpoint">
            <h3>1. User Registration</h3>
            <p><strong>Endpoint:</strong> <code>/api/register.php</code></p>
            <p><strong>Method:</strong> <code>POST</code></p>
            <p><strong>Request Body:</strong></p>
            <pre><code>{
    "username": "your_username",
    "password": "your_password"
}</code></pre>
            <p><strong>Response:</strong></p>
            <p><strong>Success:</strong></p>
            <pre><code>{
    "status": "success",
    "message": "User registered successfully."
}</code></pre>
            <p><strong>Error:</strong></p>
            <pre><code>{
    "status": "error",
    "message": "Error message detailing what went wrong."
}</code></pre>
        </div>

        <div class="endpoint">
            <h3>2. User Login</h3>
            <p><strong>Endpoint:</strong> <code>/api/login.php</code></p>
            <p><strong>Method:</strong> <code>POST</code></p>
            <p><strong>Request Body:</strong></p>
            <pre><code>{
    "username": "your_username",
    "password": "your_password"
}</code></pre>
            <p><strong>Response:</strong></p>
            <p><strong>Success:</strong></p>
            <pre><code>{
    "status": "success",
    "message": "Login successful."
}</code></pre>
            <p><strong>Error:</strong></p>
            <pre><code>{
    "status": "error",
    "message": "Invalid username or password."
}</code></pre>
        </div>

        <div class="endpoint">
            <h3>3. Send Message</h3>
            <p><strong>Endpoint:</strong> <code>/api/send_message.php</code></p>
            <p><strong>Method:</strong> <code>POST</code></p>
            <p><strong>Request Body:</strong></p>
            <pre><code>{
    "message": "Your message here"
}</code></pre>
            <p><strong>Response:</strong></p>
            <p><strong>Success:</strong></p>
            <pre><code>{
    "status": "success",
    "message": "Message sent successfully."
}</code></pre>
            <p><strong>Error:</strong></p>
            <pre><code>{
    "status": "error",
    "message": "Error message detailing what went wrong."
}</code></pre>
        </div>

        <div class="endpoint">
            <h3>4. Get Messages</h3>
            <p><strong>Endpoint:</strong> <code>/api/get_messages.php</code></p>
            <p><strong>Method:</strong> <code>GET</code></p>
            <p><strong>Response:</strong></p>
            <pre><code>[
    {
        "username": "user1",
        "message": "Hello, world!",
        "timestamp": "2024-10-01 12:00:00"
    },
    {
        "username": "user2",
        "message": "Hi there!",
        "timestamp": "2024-10-01 12:01:00"
    }
]</code></pre>
        </div>

        <hr>

        <h2>Usage Examples</h2>

        <div class="example">
            <h3>Register a User</h3>
            <pre><code>
fetch('http://chatappp.free.nf/api/register.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ username: 'newuser', password: 'password123' })
})
.then(response => response.json())
.then(data => console.log(data));
            </code></pre>
        </div>

        <div class="example">
            <h3>Login a User</h3>
            <pre><code>
fetch('http://chatappp.free.nf/api/login.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ username: 'newuser', password: 'password123' })
})
.then(response => response.json())
.then(data => console.log(data));
            </code></pre>
        </div>

        <div class="example">
            <h3>Send a Message</h3>
            <pre><code>
fetch('http://chatappp.free.nf/api/send_message.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ message: 'Hello, world!' })
})
.then(response => response.json())
.then(data => console.log(data));
            </code></pre>
        </div>

        <div class="example">
            <h3>Get Messages</h3>
            <pre><code>
fetch('http://chatappp.free.nf/api/get_messages.php')
.then(response => response.json())
.then(data => console.log(data));
            </code></pre>
        </div>

        <hr>

        <h2>Security Considerations</h2>
        <ul>
            <li>Ensure users' passwords are hashed and stored securely.</li>
            <li>Use HTTPS to encrypt data transmitted over the network.</li>
            <li>Validate and sanitize all inputs to prevent SQL injection and XSS attacks.</li>
        </ul>

        <hr>

        <h2>Future Improvements</h2>
        <ul>
            <li>Implement token-based authentication for improved security.</li>
            <li>Allow private messaging between users.</li>
            <li>Implement real-time notifications for new messages.</li>
        </ul>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Chat Application. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
