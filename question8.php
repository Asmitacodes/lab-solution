<!DOCTYPE html>
<html>
<body>
<!-- Form for inputting the number of animals -->
<form method="POST">
    Chickens: <input type="number" name="chickens" required><br>
    Cows: <input type="number" name="cows" required><br>
    Pigs: <input type="number" name="pigs" required><br>
    <input type="submit" value="Calculate">
</form>

<?php
// Check if the form is submitted
if (!empty($_POST)) { // Use !empty($_POST) to check if form data is submitted
    // Safely retrieve form data
    $chickens = isset($_POST['chickens']) ? intval($_POST['chickens']) : 0;
    $cows = isset($_POST['cows']) ? intval($_POST['cows']) : 0;
    $pigs = isset($_POST['pigs']) ? intval($_POST['pigs']) : 0;

    // Calculate total legs
    $total_legs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

    // Output the total legs
    echo "Total legs: $total_legs";
}
?>
</body>
</html>
