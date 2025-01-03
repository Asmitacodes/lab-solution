// script.js

// Append value to the input field
function appendValue(value) {
    const resultField = document.getElementById('result');
    resultField.value += value;
}

// Clear the input field
function clearResult() {
    document.getElementById('result').value = '';
}

// Calculate the result
function calculateResult() {
    const resultField = document.getElementById('result');
    try {
        resultField.value = eval(resultField.value); // Evaluate the expression
    } catch (error) {
        resultField.value = 'Error'; // Show error for invalid input
    }
}
