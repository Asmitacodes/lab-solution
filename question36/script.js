// script.js

// Function to set a cookie
function setCookie() {
    const key = document.getElementById('key').value;
    const value = document.getElementById('value').value;

    if (key && value) {
        document.cookie = `${key}=${value}; path=/;`;
        alert(`Cookie set: ${key}=${value}`);
        displayAllCookies();
    } else {
        alert('Please enter both key and value.');
    }
}

// Function to get a cookie value by key
function getCookie() {
    const key = document.getElementById('key').value;
    if (key) {
        const cookies = document.cookie.split('; ').reduce((acc, cookie) => {
            const [cookieKey, cookieValue] = cookie.split('=');
            acc[cookieKey] = cookieValue;
            return acc;
        }, {});
        alert(cookies[key] ? `Value: ${cookies[key]}` : 'Cookie not found.');
    } else {
        alert('Please enter a key.');
    }
}

// Function to display all cookies in a table
function displayAllCookies() {
    const cookiesTable = document.getElementById('cookiesTable').querySelector('tbody');
    cookiesTable.innerHTML = ''; // Clear the table

    const cookies = document.cookie.split('; ').reduce((acc, cookie) => {
        const [cookieKey, cookieValue] = cookie.split('=');
        acc[cookieKey] = cookieValue;
        return acc;
    }, {});

    for (const [key, value] of Object.entries(cookies)) {
        const row = cookiesTable.insertRow();
        row.insertCell(0).textContent = key;
        row.insertCell(1).textContent = value;
    }
}

// Function to delete a cookie by key
function deleteCookie() {
    const key = document.getElementById('key').value;
    if (key) {
        document.cookie = `${key}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        alert(`Cookie deleted: ${key}`);
        displayAllCookies();
    } else {
        alert('Please enter a key.');
    }
}

// Function to delete all cookies
function deleteAllCookies() {
    const cookies = document.cookie.split('; ');
    cookies.forEach(cookie => {
        const [key] = cookie.split('=');
        document.cookie = `${key}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    });
    alert('All cookies deleted.');
    displayAllCookies();
}

// Display all cookies on page load
displayAllCookies();
