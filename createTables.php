<?php
$servername = "localhost";
$username = "trd7801";
$password = "testing";
$dbname = "user_tables";

// Create connection
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE testing_table 
(
id int,
firstname VARCHAR(30),
lastname VARCHAR(30)
)";

//$conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Table testing_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
