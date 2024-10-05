<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db/db.php';

$query = "SELECT users.username, messages.message, messages.timestamp 
          FROM messages 
          JOIN users ON messages.user_id = users.id 
          ORDER BY messages.timestamp DESC LIMIT 20";

$result = $conn->query($query);
$messages = [];

while ($row = $result->fetch_assoc()) {
    $messages[] = [
        "username" => $row['username'],
        "message" => $row['message'],
        "timestamp" => $row['timestamp']
    ];
}

echo json_encode($messages);
$conn->close();
?>
