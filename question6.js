// Solution 6: Calculate number of days left until next Christmas
function daysUntilChristmas() {
    const today = new Date();
    const year = today.getFullYear();
    const christmas = new Date(year, 11, 25); // December 25 of the current year
    if (today > christmas) {
        christmas.setFullYear(year + 1); // Move to next year
    }
    const diffTime = christmas - today; // Difference in milliseconds
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); // Convert to days
    return diffDays;
}

console.log(`The number of days until next Christmas is: ${daysUntilChristmas()}`);
