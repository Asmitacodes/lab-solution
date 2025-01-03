const personAccount = {
    firstName: "John",
    lastName: "Doe",
    incomes: { salary: 5000, bonus: 200 },
    expenses: { rent: 1500, groceries: 500 },
    totalIncome() {
        return Object.values(this.incomes).reduce((a, b) => a + b, 0);
    },
    totalExpense() {
        return Object.values(this.expenses).reduce((a, b) => a + b, 0);
    },
    accountInfo() {
        return `${this.firstName} ${this.lastName}`;
    },
    addIncome(amount) {
        this.incomes.misc = amount;
    },
    addExpense(amount) {
        this.expenses.misc = amount;
    },
    accountBalance() {
        return this.totalIncome() - this.totalExpense();
    }
};
console.log(personAccount.accountInfo());
console.log(`Balance: ${personAccount.accountBalance()}`);
