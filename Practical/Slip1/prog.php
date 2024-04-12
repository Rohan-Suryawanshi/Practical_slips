<?php
session_start();


if(isset($_SESSION['page_access_count'])) {
    $_SESSION['page_access_count']++; 
} else {
    $_SESSION['page_access_count'] = 1;
}

echo "Number of times the page has been accessed: " . $_SESSION['page_access_count'];
?>
