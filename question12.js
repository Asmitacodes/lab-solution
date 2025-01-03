// Solution 12: Check if input is an array
function isArray(input) {
    console.log(`Input: ${input}`);
    console.log(`Is array: ${Array.isArray(input)}`);
}

isArray([1, 2, 3]); // True
isArray("Hello"); // False
