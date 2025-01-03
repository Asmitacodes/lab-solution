<?php
if (php_sapi_name() == "cli") {
    // Prompt the user for the number of chickens
    $chickens = readline("Enter the number of chickens: ");
    // Validate the input
    if (!is_numeric($chickens)) {
        echo "Error: Please provide a numeric value for chickens.\n";
        exit(1);
    }

    // Prompt the user for the number of cows
    $cows = readline("Enter the number of cows: ");
    // Validate the input
    if (!is_numeric($cows)) {
        echo "Error: Please provide a numeric value for cows.\n";
        exit(1);
    }

    // Prompt the user for the number of pigs
    $pigs = readline("Enter the number of pigs: ");
    // Validate the input
    if (!is_numeric($pigs)) {
        echo "Error: Please provide a numeric value for pigs.\n";
        exit(1);
    }

    // Calculate total legs
    $legs = $chickens * 2 + $cows * 4 + $pigs * 4;
    echo "Total legs: $legs\n";
} else {
    echo "This script is intended for command-line use only.\n";
}
