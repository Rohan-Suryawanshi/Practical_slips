<?php
// Establish connection to your PostgreSQL database
$host = "localhost";
$port = "5432";
$dbname = "msg";
$user = "postgres";
$password = "root";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    echo "Error: Unable to connect to PostgreSQL database.";
    exit;
}


$tno = $_GET['tno'];


$sql = "SELECT * FROM teacher WHERE tno = $tno";
$result = pg_query($conn, $sql);

if ($result) {
    if (pg_num_rows($result) > 0) {

        $row = pg_fetch_assoc($result);
        echo "<p><strong>Name:</strong> " . $row['tname'] . "</p>";
        echo "<p><strong>Qualification:</strong> " . $row['qualification'] . "</p>";
        echo "<p><strong>Salary:</strong> $" . $row['salary'] . "</p>";
    } else {
        echo "Teacher details not found.";
    }
    pg_free_result($result);
} else {
    echo "Error: Failed to fetch teacher details.";
}

// Close connection
pg_close($conn);
?>
