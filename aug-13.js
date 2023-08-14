function squareOrSquareRoot(array) {
    let newArr = [];

    for (let i = 0; i < array.length; i++) {
        let sqrt = Math.sqrt(array[i]);

        if (sqrt === Math.round(sqrt)) {
            newArr.push(parseInt(sqrt));
        } else {
            newArr.push(Math.pow(array[i], 2));
        }
    }

    return newArr;
}

console.log(squareOrSquareRoot([4, 3, 9, 7, 2, 1]));