const flip = (d, a) => {
    //TODO
    a.sort((a, b) => a - b); // Ascending order

    d == 'R' ? a : a.reverse();
    return a;
}

console.log(flip('R', [3, 2, 1, 2]));
console.log(flip('L', [1, 4, 5, 3, 5]));