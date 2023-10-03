function countPositivesSumNegatives(input) {
    // your code here
    let positive = 0;
    let negative = 0;

    if (input === null || input.length == 0) {
        return [];
    } else {
        input.forEach(function (number, index) {
            if (number > 0) {
                positive++;
            } else if (number < 0) {
                negative -= number;
            }
        });

        if (negative == 0) {
            return [positive, negative];
        } else {
            return [positive, -negative];
        }
    }
}

console.log(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));


function squareSum(numbers) {
    const newArr = numbers.map(function (element) {
        return element ** 2;
    });

    const sum = newArr.reduce(function (accumulator, currentValue) {
        return accumulator + currentValue;
    }, 0);

    return sum;
}

// console.log(squareSum([1, 2]));
// console.log(squareSum([0, 3, 4, 5]));