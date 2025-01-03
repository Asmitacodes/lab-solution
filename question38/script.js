// script.js

const paragraph = document.getElementById("paragraph");

document.getElementById("changeBg").addEventListener("click", () => {
    document.body.style.backgroundColor = getRandomColor();
});

document.getElementById("changeParaBg").addEventListener("click", () => {
    paragraph.style.backgroundColor = getRandomColor();
});

document.getElementById("hidePara").addEventListener("click", () => {
    paragraph.style.display = "none";
});

document.getElementById("showPara").addEventListener("click", () => {
    paragraph.style.display = "block";
});

document.getElementById("increaseFontSize").addEventListener("click", () => {
    const currentSize = parseFloat(window.getComputedStyle(paragraph).fontSize);
    paragraph.style.fontSize = `${currentSize + 2}px`;
});

document.getElementById("decreaseFontSize").addEventListener("click", () => {
    const currentSize = parseFloat(window.getComputedStyle(paragraph).fontSize);
    paragraph.style.fontSize = `${currentSize - 2}px`;
});

document.getElementById("resetFontSize").addEventListener("click", () => {
    paragraph.style.fontSize = "12pt";
});

document.getElementById("changeTextColor").addEventListener("click", () => {
    paragraph.style.color = getRandomColor();
});

// Function to generate a random color
function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
