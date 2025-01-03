function tenMostFrequentWords(text) {
    const words = text.toLowerCase().match(/\w+/g);
    const wordCounts = words.reduce((acc, word) => {
        acc[word] = (acc[word] || 0) + 1;
        return acc;
    }, {});
    const sortedWords = Object.entries(wordCounts).sort((a, b) => b[1] - a[1]);
    return sortedWords.slice(0, 10);
}
const text = "This is a test. This test is only a test.";
console.log(tenMostFrequentWords(text));
