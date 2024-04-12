<?php
// Read contents of contact.dat file
$file = fopen("contact.dat", "r");

if ($file) {
    echo "<table border='1'>";
    echo "<tr><th>Sr. No.</th><th>Name</th><th>Residence Number</th>"
    . "<th>Mobile Number</th><th>Address</th></tr>";
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
