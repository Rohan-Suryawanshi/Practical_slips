<!DOCTYPE html>
<html>
<head>
    <title>Selected Preferences</title>
</head>
<body>
    <h2>Selected Preferences</h2>
    <p>Font Style: <?php echo $_COOKIE['font_style']; ?></p>
    <p>Font Size: <?php echo $_COOKIE['font_size']; ?></p>
    <p>Font Color: <span style="color:<?php echo $_COOKIE['font_color']; ?>"><?php echo $_COOKIE['font_color']; ?></span></p>
    <p>Background Color: <span style="background-color:<?php echo $_COOKIE['bg_color']; ?>"><?php echo $_COOKIE['bg_color']; ?></span></p>
    <p><a href="page3.php">Next Page (Apply Preferences)</a></p>
</body>
</html>
