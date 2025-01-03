// Question 4: Capitalize first letter of each word
function capitalizeWords(str) {
    // Split the string into words, capitalize the first letter of each, and join back into a string
    return str.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
}
// Input and Output
const input4 = 'javascript is fun';
console.log(`The input is "${input4}" and the output is "${capitalizeWords(input4)}"`);
