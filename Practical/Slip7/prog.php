<?php
// Load the XML file
$doc = new DOMDocument();
$doc->load('item.xml');

// Get all elements with tag name 'MovieInfo'
$movies = $doc->getElementsByTagName('item');

// Iterate through each 'MovieInfo' element
foreach ($movies as $movie) {
    // Get MovieTitle and ActorName elements
    $movieTitle = $movie->getElementsByTagName('item-name')->item(0)->nodeValue;
    $actorName = $movie->getElementsByTagName('item-rate')->item(0)->nodeValue;
    
    // Print MovieTitle and ActorName
    echo "MovieTitle: $movieTitle, ActorName: $actorName <br>";
}
?>
