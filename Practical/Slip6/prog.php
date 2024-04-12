<?php
// Load the XML file into a SimpleXML object
$xml = simplexml_load_file("item.xml");
// Display attributes and elements
echo "<h2>Elements:</h2>";
$item=$xml->item;
foreach ($item as $child) {
        echo "<p>" . $child->item_name."</p>";
}
?>
