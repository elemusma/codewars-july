function squareSum(numbers) {
    const newArr = numbers.map(function (element) {
        return element ** 2;
    });

    const sum = newArr.reduce(function (accumulator, currentValue) {
        return accumulator + currentValue;
    }, 0);

    return sum;
}

console.log(squareSum([1, 2]));
console.log(squareSum([0, 3, 4, 5]));