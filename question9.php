<!DOCTYPE html>
<html>
<body>
<!-- Form to input wins, draws, and losses -->
<form method="POST">
    Wins: <input type="number" name="wins" required><br>
    Draws: <input type="number" name="draws" required><br>
    Losses: <input type="number" name="losses" required><br>
    <input type="submit" value="Calculate">
</form>

<?php
// Check if form data has been submitted using !empty($_POST)
if (!empty($_POST)) {
    // Retrieve form data safely and ensure default values
    $wins = isset($_POST['wins']) ? intval($_POST['wins']) : 0; // Convert input to integer
    $draws = isset($_POST['draws']) ? intval($_POST['draws']) : 0; // Convert input to integer
    $losses = isset($_POST['losses']) ? intval($_POST['losses']) : 0; // Convert input to integer

    // Calculate total points: 3 points for a win, 1 point for a draw, 0 points for a loss
    $points = ($wins * 3) + ($draws);

    // Output the total points
    echo "<h3>Total points: $points</h3>"; // Display the result
}
?>
</body>
</html>
