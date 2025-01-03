const dog = {
    name: "Max",
    legs: 4,
    color: "Brown",
    age: 5,
    bark() {
        return "Woof woof!";
    },
    breed: "Labrador",
    getDogInfo() {
        return `${this.name}, ${this.color} ${this.breed}, ${this.age} years old.`;
    }
};
console.log(dog);
console.log(dog.bark());
console.log(dog.getDogInfo());
