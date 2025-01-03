// Solution 14: Sort array items
function sortArray(arr) {
    console.log(`Input array: ${arr}`);
    console.log(`Sorted array: ${arr.sort((a, b) => a - b)}`);
}

sortArray([3, 8, 7, 6, 5, -4, 3, 2, 1]);
