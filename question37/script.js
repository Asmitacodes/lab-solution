// script.js

// Add event listener to the "Add New" button
document.getElementById('addRowBtn').addEventListener('click', () => {
    const table = document.getElementById('productTable');
    const tbody = table.querySelector('tbody');
    const lastRow = tbody.lastElementChild;

    // Clone the last row
    const newRow = lastRow.cloneNode(true);

    // Update the row number
    const rowNumber = tbody.childElementCount + 1;
    newRow.cells[0].textContent = rowNumber;

    // Clear the inputs in the cloned row
    newRow.querySelector('select').selectedIndex = 0;
    newRow.querySelector('input').value = '';

    // Add event listener to the delete button of the new row
    newRow.querySelector('.delete-btn').addEventListener('click', function () {
        this.parentElement.parentElement.remove();
        updateRowNumbers();
    });

    // Append the new row to the table
    tbody.appendChild(newRow);
});

// Add event listeners to existing delete buttons
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {
        this.parentElement.parentElement.remove();
        updateRowNumbers();
    });
});

// Function to update row numbers after a row is deleted
function updateRowNumbers() {
    const rows = document.querySelectorAll('#productTable tbody tr');
    rows.forEach((row, index) => {
        row.cells[0].textContent = index + 1;
    });
}
