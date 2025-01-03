// Question 2: Alphabetize a string
function alphabetizeString(str) {
    // Split the string into characters, sort them alphabetically, and join back into a string
    return str.split('').sort().join('');
}
// Input and Output
const input2 = 'webmaster';
console.log(`The input is "${input2}" and the output is "${alphabetizeString(input2)}"`);