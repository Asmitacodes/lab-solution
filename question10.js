// Solution 10: Find the largest number in an array
function largestInArray(arr) {
    const largest = Math.max(...arr);
    console.log(`Input array: ${arr}`);
    console.log(`Largest number: ${largest}`);
}

largestInArray([1, 2, 3, 4, 5]);
