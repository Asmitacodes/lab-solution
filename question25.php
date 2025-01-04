<?php
// Array containing key-value pairs
$info = [
    'Name' => 'Ram Bahadur',
    'Address' => 'Lalitpur',
    'Email' => 'info@ram.com',
    'Phone' => '98454545',
    'Website' => 'www.ram.com'
];

// Generate an HTML table to display the array content
echo "<table border='1'>";
foreach ($info as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
