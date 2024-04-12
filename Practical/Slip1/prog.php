<!-- Write a PHP script to keep track of number of times the web page has been accessed (Use Session 
Tracking). -->
<?php
session_start();

// Check if the session variable exists
if(isset($_SESSION['page_access_count'])) {
    $_SESSION['page_access_count']++; // Increment the count
} else {
    $_SESSION['page_access_count'] = 1; // Initialize the count if it doesn't exist
}

// Display the count
echo "Number of times the page has been accessed: " . $_SESSION['page_access_count'];
?>
