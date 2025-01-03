function isBlank(str) {
    console.log(`Input: "${str}"`);
    console.log(`Is blank: ${str.trim().length === 0}`);
}
isBlank("   ");
isBlank("Hello");
