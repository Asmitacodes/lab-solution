// a. Get the first paragraph using document.querySelector(tagname)
const firstParagraph = document.querySelector('p');
console.log('First paragraph:', firstParagraph.textContent);

// b. Get each paragraph using document.querySelector('#id') by their id
const para1 = document.querySelector('#para1');
const para2 = document.querySelector('#para2');
const para3 = document.querySelector('#para3');
const para4 = document.querySelector('#para4');
console.log('Paragraphs by id:', para1, para2, para3, para4);

// c. Get all the p elements as NodeList using document.querySelectorAll(tagname)
const allParagraphs = document.querySelectorAll('p');
console.log('All paragraphs:', allParagraphs);

// d. Loop through the NodeList and get the text content of each paragraph
allParagraphs.forEach((paragraph, index) => {
    console.log(`Text of paragraph ${index + 1}:`, paragraph.textContent);
});

// e. Set text content to the fourth paragraph
para4.textContent = 'Fourth Paragraph (Updated)';

// f. Set id and class attributes for all the paragraphs
allParagraphs.forEach((paragraph, index) => {
    paragraph.id = `paragraph-${index + 1}`;
    paragraph.className = `class-paragraph-${index + 1}`;
});

// g. Change the style of each paragraph
allParagraphs.forEach((paragraph) => {
    paragraph.style.color = 'blue';
    paragraph.style.backgroundColor = 'lightyellow';
    paragraph.style.border = '1px solid black';
    paragraph.style.fontSize = '16px';
    paragraph.style.fontFamily = 'Arial, sans-serif';
});

// h. Select all paragraphs and give the first and third a green color,
//    and the second and fourth a red color
allParagraphs.forEach((paragraph, index) => {
    if (index % 2 === 0) {
        paragraph.style.color = 'green'; // First and third (index 0, 2)
    } else {
        paragraph.style.color = 'red'; // Second and fourth (index 1, 3)
    }
});

// i. Set text content, id, and class to each paragraph
allParagraphs.forEach((paragraph, index) => {
    paragraph.textContent = `This is paragraph ${index + 1}`;
    paragraph.id = `updated-paragraph-${index + 1}`;
    paragraph.className = `updated-class-${index + 1}`;
});
