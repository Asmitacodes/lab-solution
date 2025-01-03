// Question 5: Get current date in various formats
function getCurrentDate() {
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0'); // Day with leading zero
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Month with leading zero
    const yyyy = today.getFullYear(); // Full year

    // Format the date in different styles and log output
    console.log(`The input is today's date and the output in mm-dd-yyyy format is ${mm}-${dd}-${yyyy}`);
    console.log(`The output in mm/dd/yyyy format is ${mm}/${dd}/${yyyy}`);
    console.log(`The output in dd-mm-yyyy format is ${dd}-${mm}-${yyyy}`);
    console.log(`The output in dd/mm/yyyy format is ${dd}/${mm}/${yyyy}`);
    console.log(`The output in "yyyy month day" format is ${yyyy} ${today.toLocaleString('default', { month: 'long' })} ${dd}`);
}
getCurrentDate(); 