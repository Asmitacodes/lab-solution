function nextWeekend() {
    const today = new Date();
    const daysToSaturday = (6 - today.getDay() + 7) % 7;
    const saturday = new Date(today);
    saturday.setDate(today.getDate() + daysToSaturday);
    console.log(`Next weekend starts on ${saturday.toDateString()}`);
}
nextWeekend();
