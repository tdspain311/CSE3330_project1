<?php
$servername = "localhost";
$username = "test_user";
$password = "password";
$dbname = "soccer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 

$sql = "SELECT Team1, COUNT(Team1) AS Teams, SUM(Team1_score) AS Team1Total, SUM(Team2_score) AS Team2Total FROM match_results GROUP BY Team1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr style='text-align: left'><th>Team</th><th>Games</th><th>Team 1 Totals</th><th>Team 2 Totals</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Team1"]."</td><td>".$row["Teams"]."</td><td>".$row["Team1Total"]."</td><td>".$row["Team2Total"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>