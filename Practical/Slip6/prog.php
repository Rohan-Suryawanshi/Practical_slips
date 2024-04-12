<?php
// Load the XML file into a SimpleXML object
$xml = simplexml_load_file("item.xml");
// Display attributes and elements
echo "<h2>Elements:</h2>";
foreach ($xml->children() as $child) {
    foreach ($child->children() as $element) {
        echo "<p>" . $element->getName() . ": " . $element . "</p>";
    }
}
?>
