<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store earning details in session
    $_SESSION['earning_details'] = $_POST;
    // Redirect to page3.php to display employee information
    header("Location: page3.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Earning Details</title>
</head>
<body>
    <h2>Enter Earning Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Basic: <input type="text" name="basic"><br><br>
        DA: <input type="text" name="da"><br><br>
        HRA: <input type="text" name="hra"><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
