<?php
$servername = "localhost/MariaDB 10/";
$username = "Web";
$password = "@Stefan1e!2W3b";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
