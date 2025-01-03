// script.js

function validateForm() {
    const name = document.getElementById("name").value.trim();
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const address = document.getElementById("address").value.trim();
    const gender = document.querySelector('input[name="gender"]:checked');
    const course = document.getElementById("course").value;

    let errors = [];

    // Name Validation
    if (!name || /\d/.test(name)) {
        errors.push("Name cannot be empty and must not contain numbers.");
    }

    // Username Validation
    if (!username || /[^a-zA-Z0-9_]/.test(username)) {
        errors.push("Username can only contain letters, numbers, and underscores.");
    }

    // Email Validation
    if (!email.includes("@")) {
        errors.push("Email must include '@'.");
    }

    // Password Validation
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!passwordRegex.test(password)) {
        errors.push("Password must include uppercase, lowercase, number, special character, and be at least 8 characters long.");
    }

    // Phone Validation
    const phoneRegex = /^(98|97|96)\d{8}$/;
    if (!phoneRegex.test(phone)) {
        errors.push("Phone must start with 98, 97, or 96 and be 10 digits.");
    }

    // Address Validation
    if (!address) {
        errors.push("Address cannot be empty.");
    }

    // Gender Validation
    if (!gender) {
        errors.push("Please select a gender.");
    }

    // Course Validation
    if (!course) {
        errors.push("Please select a course.");
    }

    // Display errors or submit the form
    const errorMessages = document.getElementById("errorMessages");
    if (errors.length > 0) {
        errorMessages.innerHTML = errors.join("<br>");
        return false; // Prevent form submission
    } else {
        alert("Form submitted successfully!");
        return true; // Allow form submission
    }
}
