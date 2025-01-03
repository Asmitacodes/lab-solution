// Solution 11: Find the smallest number in an array
function smallestInArray(arr) {
    const smallest = Math.min(...arr);
    console.log(`Input array: ${arr}`);
    console.log(`Smallest number: ${smallest}`);
}

smallestInArray([1, 2, 3, 4, 5]);
