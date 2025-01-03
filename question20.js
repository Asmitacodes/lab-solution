function dateDifference(date1, date2) {
    const diffTime = Math.abs(date2 - date1);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    console.log(`Difference: ${diffDays} days`);
}
dateDifference(new Date("2024-01-01"), new Date("2024-12-25"));
