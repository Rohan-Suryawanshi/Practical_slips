<!DOCTYPE html>
<html>
<head>
    <title>Number Operations</title>
</head>
<body>
    <h2>Number Operations</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to generate Fibonacci series
    function fibonacci($n) {
        $fib = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    // Function to find the sum of digits
    function sumOfDigits($number) {
        $sum = 0;
        while ($number > 0) {
            $sum += $number % 10;
            $number = (int)($number / 10);
        }
        return $sum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number entered by the user
        $number = $_POST['number'];

        // Validate if the number is a positive integer
        if ($number >= 0 ) {
            // Display Fibonacci series
            echo "<h3>Fibonacci Series:</h3>";
            $fibonacciSeries = fibonacci($number);
            echo implode(", ", $fibonacciSeries);

            // Display sum of digits
            echo "<h3>Sum of Digits:</h3>";
            echo "Sum of digits of $number is: " . sumOfDigits($number);
        } else {
            echo "<p style='color: red;'>Please enter a valid positive integer.</p>";
        }
    }
    ?>
</body>
</html>
