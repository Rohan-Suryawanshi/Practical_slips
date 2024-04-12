<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set cookies for preferences
    setcookie("font_style", $_POST['font_style'], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("font_size", $_POST['font_size'], time() + (86400 * 30), "/");
    setcookie("font_color", $_POST['font_color'], time() + (86400 * 30), "/");
    setcookie("bg_color", $_POST['bg_color'], time() + (86400 * 30), "/");

    // Redirect to page2.php to display selected settings
    header("Location: page2.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Set Preferences</title>
</head>
<body>
    <h2>Set Preferences</h2>
    <form method="post" action="page1.php">
        Font Style:
        <select name="font_style">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Tahoma">Tahoma</option>
        </select><br><br>
        Font Size:
        <select name="font_size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select><br><br>
        Font Color:
        <input type="color" name="font_color"><br><br>
        Background Color:
        <input type="color" name="bg_color"><br><br>
        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>
