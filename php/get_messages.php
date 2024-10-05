<?php
include '../db/db.php';

$query = "SELECT users.username, messages.message, messages.timestamp 
          FROM messages 
          JOIN users ON messages.user_id = users.id 
          ORDER BY messages.timestamp DESC LIMIT 20";

$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['username']}:</strong> {$row['message']} <small><em>({$row['timestamp']})</em></small></p>";
}
$conn->close();
?>