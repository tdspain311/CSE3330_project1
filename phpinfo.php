<?php
$servername = "omega.uta.edu";
$username = "trd7801";
$password = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>