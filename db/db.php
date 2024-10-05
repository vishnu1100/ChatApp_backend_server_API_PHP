<?php
$host = 'localhost';  // Database host (could be '127.0.0.1')
$dbname = 'chat_app'; // Your database name
$user = 'root';       // Your database username
$pass = '';           // Your database password

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
