// script.js

// Function to create numbers on the clock face
function addNumbersToClock() {
    const clockFace = document.querySelector('.face');
    const radius = 140; // Radius for positioning the numbers
    const centerX = 150; // Center X position
    const centerY = 150; // Center Y position

    for (let i = 1; i <= 12; i++) {
        const angle = (i * 30) * (Math.PI / 180); // Convert degree to radians
        const x = centerX + radius * Math.sin(angle);
        const y = centerY - radius * Math.cos(angle);

        const number = document.createElement('div');
        number.className = 'number';
        number.style.left = `${x}px`;
        number.style.top = `${y}px`;
        number.textContent = i;

        clockFace.appendChild(number);
    }
}

// Function to update the clock hands
function setClock() {
    const now = new Date();

    const seconds = now.getSeconds();
    const secondsDegrees = ((seconds / 60) * 360) + 90;

    const minutes = now.getMinutes();
    const minutesDegrees = ((minutes / 60) * 360) + 90;

    const hours = now.getHours();
    const hoursDegrees = ((hours / 12) * 360) + ((minutes / 60) * 30) + 90;

    document.querySelector('.second-hand').style.transform = `rotate(${secondsDegrees}deg)`;
    document.querySelector('.minute-hand').style.transform = `rotate(${minutesDegrees}deg)`;
    document.querySelector('.hour-hand').style.transform = `rotate(${hoursDegrees}deg)`;
}

// Add numbers to the clock and initialize clock
addNumbersToClock();
setInterval(setClock, 1000);
setClock();
