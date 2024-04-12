<?php
// Read contents of contact.dat file
$file = fopen("contact.dat", "r");

if ($file) {
    
    while (($line = fgets($file)) !== false) {
        $contact = explode(",", $line);
        echo "<tr>";
        foreach ($contact as $data) {
            echo "<td>" . $data. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($file);
} else {
    echo "Error: Unable to open file.";
}
?>
