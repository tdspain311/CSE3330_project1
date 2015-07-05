<?php
$servername = "localhost";
$username = "test_user";
$password = "password";
$dbname = "soccer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 

$sql = "SELECT Player_id, MAX(Yellow_Cards) AS highYellowCard FROM player_cards;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr style='text-align: left'><th>Player ID</th><th>Yellow Cards</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Player_id"]."</td><td>".$row["highYellowCard"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>