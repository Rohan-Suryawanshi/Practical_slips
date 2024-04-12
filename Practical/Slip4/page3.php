<?php
session_start();

// Check if employee details and earning details are set in session
if (!isset($_SESSION['employee_details']) || !isset($_SESSION['earning_details'])) {
    // Redirect to page1.php if session data is not set
    header("Location: page1.php");
    exit;
}

// Calculate total earnings
$total = $_SESSION['earning_details']['basic'] + $_SESSION['earning_details']['da'] + $_SESSION['earning_details']['hra'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Information</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p>Employee Number: <?php echo $_SESSION['employee_details']['eno']; ?></p>
    <p>Employee Name: <?php echo $_SESSION['employee_details']['ename']; ?></p>
    <p>Address: <?php echo $_SESSION['employee_details']['address']; ?></p>
    <p>Basic: <?php echo $_SESSION['earning_details']['basic']; ?></p>
    <p>DA: <?php echo $_SESSION['earning_details']['da']; ?></p>
    <p>HRA: <?php echo $_SESSION['earning_details']['hra']; ?></p>
    <p>Total: <?php echo $total; ?></p>
</body>
</html>
