<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define database connection parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'ayush');
define('DB_PASS', 'ayushanand24');
define('DB_NAME', 'PasswordManager');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
