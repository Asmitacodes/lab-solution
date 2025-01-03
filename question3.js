// Question 3: Count vowels in a string
function countVowels(str) {
    // Define a regex to match vowels
    const vowels = str.match(/[aeiou]/gi);
    // Return the count of vowels, or 0 if no vowels found
    return vowels ? vowels.length : 0;
}
// Input and Output
const input3 = 'hello world';
console.log(`The input is "${input3}" and the output is ${countVowels(input3)} vowels`);