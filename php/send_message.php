<?php
session_start();
include '../db/db.php';

$user_id = $_SESSION['user_id'];
$message = $_POST['message'];

$query = "INSERT INTO messages (user_id, message) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("is", $user_id, $message);
$stmt->execute();
$stmt->close();
$conn->close();
?>
