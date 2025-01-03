// script.js

// Selecting elements
const incrementButton = document.getElementById('increment');
const decrementButton = document.getElementById('decrement');
const resetButton = document.getElementById('reset');
const counterDisplay = document.getElementById('counter');

// Initial counter value
let counter = 0;

// Increment counter
incrementButton.addEventListener('click', () => {
    counter++;
    updateCounterDisplay();
});

// Decrement counter
decrementButton.addEventListener('click', () => {
    counter--;
    updateCounterDisplay();
});

// Reset counter
resetButton.addEventListener('click', () => {
    counter = 0;
    updateCounterDisplay();
});

// Update counter display
function updateCounterDisplay() {
    counterDisplay.textContent = counter;
}
