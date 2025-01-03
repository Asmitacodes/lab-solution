// Solution 15: Display colors with ordinal suffix
function displayColors(colors) {
    const suffix = ["th", "st", "nd", "rd"];
    colors.forEach((color, index) => {
        const ord = index + 1;
        const suffixIndex = ord % 10 < 4 && Math.floor(ord / 10) !== 1 ? ord % 10 : 0;
        console.log(`${ord}${suffix[suffixIndex]} choice is ${color}`);
    });
}

displayColors(["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"]);
