<?php
$servername = "omega.uta.edu";
$username = "trd7801";
$password = "testing";

// Create connection
$conn = new oci_connect($servername, $username, $password);

// Check connection
if ($conn->oci_error) {
    die("Connection failed: " . $conn->oci_error);
} 

// sql to create table
$sql = "CREATE TABLE testing_table 
(
id int,
firstname VARCHAR(30),
lastname VARCHAR(30)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table testing_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
