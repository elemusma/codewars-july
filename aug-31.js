function removeEveryOther(arr) {
    //your code here
    const filteredArray = arr.filter(function (element, index) {
        return index % 2 === 0;
    });

    return filteredArray;
}

console.log(removeEveryOther(['Hello', 'Goodbye', 'Hello Again']));