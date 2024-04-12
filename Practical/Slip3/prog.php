<?php
session_start();

// Initialize login attempts count
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "user"; // Change this to your desired username
    $password = "password"; // Change this to your desired password

    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $username && $entered_password === $password) {

        $_SESSION['login_attempts'] = 0;

        header("Location: welcome.php");
        exit;
    } else {
        $_SESSION['login_attempts']++;
        
        if ($_SESSION['login_attempts'] >= 3) {
            $error_message = "Login attempts exceeded. Please try again later.";
        } else {
            $error_message = "Invalid username or password. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
