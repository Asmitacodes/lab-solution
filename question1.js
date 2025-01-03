// Question 1: Reverse a number
function reverseNumber(num) {
    // Convert the number to a string and split it into an array of characters
    let reversed = num.toString().split('').reverse().join('');
    // Convert the reversed string back to a number and return it
    return parseInt(reversed);
}
// Input and Output
const input1 = 12345;
console.log(`The input is ${input1} and the output is ${reverseNumber(input1)}`);