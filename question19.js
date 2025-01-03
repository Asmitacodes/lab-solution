function calculateAge(birthDate) {
    const today = new Date();
    const age = today.getFullYear() - birthDate.getFullYear();
    console.log(`You are ${age} years old.`);
}
calculateAge(new Date("1990-05-15"));
