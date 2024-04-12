<!DOCTYPE html>
<html>
<head>
    <title>Page with Applied Preferences</title>
    <style>
        body {
            font-family: <?php echo $_COOKIE['font_style']; ?>;
            font-size: <?php echo $_COOKIE['font_size']; ?>;
            color: <?php echo $_COOKIE['font_color']; ?>;
            background-color: <?php echo $_COOKIE['bg_color']; ?>;
        }
    </style>
</head>
<body>
    <h2>Page with Applied Preferences</h2>
    <p>This is a sample text.</p>
    <p><a href="page1.php">Go Back to Set Preferences</a></p>
</body>
</html>
