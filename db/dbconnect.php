<?php
// Get db credentials
require 'dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    $dbconnected = 'error';
    die("Connection failed: " . $conn->connect_error);
}
$dbconnected = 'success';
?>
