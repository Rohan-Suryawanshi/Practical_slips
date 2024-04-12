<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['login_attempts']) || $_SESSION['login_attempts'] >= 3) {
    // Redirect to login page if user is not logged in or login attempts exceeded
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    <p>Welcome to the system!</p>
</body>
</html>
