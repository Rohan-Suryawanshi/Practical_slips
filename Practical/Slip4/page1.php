<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store employee details in session
    $_SESSION['employee_details'] = $_POST;
    // Redirect to page2.php to enter earning details
    header("Location: page2.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h2>Enter Employee Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Employee Number: <input type="text" name="eno"><br><br>
        Employee Name: <input type="text" name="ename"><br><br>
        Address: <input type="text" name="address"><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
