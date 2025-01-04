<?php
// Array of countries and their cities
$citiesByCountry = [
    "USA" => ["New York", "Los Angeles", "Chicago", "Houston"],
    "Canada" => ["Toronto", "Vancouver", "Montreal", "Ottawa"],
    "India" => ["Delhi", "Mumbai", "Bangalore", "Chennai"]
];

// Get the country from the POST request
$country = $_POST['country'] ?? '';

// Return cities as JSON
if (array_key_exists($country, $citiesByCountry)) {
    echo json_encode($citiesByCountry[$country]);
} else {
    echo json_encode([]);
}
?>
