<?php
$host = 'localhost';
$db = 'uniflix';
$user = 'root'; 
$pass = '';     

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
