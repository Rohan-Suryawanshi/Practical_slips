<?php
if(isset($_GET['book'])) {
    $bookTitle = $_GET['book'];
    $xml = simplexml_load_file('books.xml');
    foreach($xml->book as $book) {
        if($book->title == $bookTitle) {
            $author = $book->author;
            $year = $book->year;
            $price = $book->price;
            echo "<h2>Book Details</h2>";
            echo "<p><strong>Title:</strong>$book->title</p>";
            echo "<p><strong>Author:</strong> $author</p>";
            echo "<p><strong>Year:</strong> $year</p>";
            echo "<p><strong>Price:</strong> $price</p>";
            break;
        }
    }
}
?>
