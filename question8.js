// Solution 8: Compare two integers and display the larger and smaller
function compareTwoNumbers(a, b) {
    console.log(`Input numbers: a = ${a}, b = ${b}`);
    if (a > b) {
        console.log(`Larger: ${a}, Smaller: ${b}`);
    } else if (b > a) {
        console.log(`Larger: ${b}, Smaller: ${a}`);
    } else {
        console.log(`Both numbers are equal: ${a}`);
    }
}

compareTwoNumbers(15, 20);
