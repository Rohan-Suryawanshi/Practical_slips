<?php
// Replace these values with your PostgreSQL database connection details
$host = "localhost";
$port = "5432";
$dbname = "your_database";
$user = "postgres";
$password = "root";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");


if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

$username = $_GET['username'];
$password = $_GET['password'];


$username = pg_escape_string($conn, $username);
$password = pg_escape_string($conn, $password);


$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = pg_query($conn, $sql);


if (!$result) {
    die("Query failed: " . pg_last_error());
}

if (pg_num_rows($result) > 0) {
   
    echo "Login successful!";
} else {
   
    echo "Invalid username or password.";
}

pg_close($conn);
?>
