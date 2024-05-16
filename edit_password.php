<?php
// Include your database connection file
include('db_connect.php');

// Receive password ID and new password from the request body
$data = json_decode(file_get_contents('php://input'), true);
$id = $_GET['id'];
$newPassword = $data['password'];

// Update password in the database
$stmt = $conn->prepare("UPDATE passwords_table SET password = ? WHERE id = ?");
$stmt->bind_param("si", $newPassword, $id);
$stmt->execute();
$stmt->close();

// Return success message
echo json_encode(['message' => 'Password updated successfully']);
?>
