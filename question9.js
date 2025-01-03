// Solution 9: Compare three integers and display the largest and smallest
function compareThreeNumbers(a, b, c) {
    const largest = Math.max(a, b, c);
    const smallest = Math.min(a, b, c);
    console.log(`Input numbers: a = ${a}, b = ${b}, c = ${c}`);
    console.log(`Largest: ${largest}, Smallest: ${smallest}`);
}

compareThreeNumbers(5, 15, 10);
