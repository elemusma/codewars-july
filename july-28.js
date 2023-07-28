function getAverage(marks) {
    //TODO : calculate the downward rounded average of the marks array
    let finalVal = 0;

    for (let i = 0; i < marks.length; i++) {
        finalVal += marks[i];
    }

    return parseInt(finalVal / marks.length);
}

console.log(getAverage([2, 2, 2, 2]));