function formatMoney(amount) {
    // your formatting code here
    // const fixedNumber = amount.toFixed(2);
    // const parts = fixedNumber.split('.');

    // if (parts.length === 1) {
    //     return `$${parts[0]}.00`;
    // } else if (parts[1].length === 1) {
    //     return `$${parts[0]}.${parts[1]}0`;
    // } else {
    //     return `$${fixedNumber}`;
    // }

    return `$${amount.toFixed(2)}`;

}

console.log(formatMoney(39.99));
console.log(formatMoney(39.9));
console.log(formatMoney(39));