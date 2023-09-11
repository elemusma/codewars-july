// Beginner - Reduce but Grow

function grow(x) {
    let product = 1;

    for (const element of x) {
        product *= element;
    }

    return product;
}

console.log(grow([1, 2, 3]));
console.log(grow([4, 1, 1, 1, 4]));

// Sum of positive

function positiveSum(arr) {
    let sum = 0;

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] > 0) {
            sum += arr[i];
        }
    }

    return sum;
}

// console.log(positiveSum([1, 2, 3, 4, 5]));
// console.log(positiveSum([1, -2, 3, 4, 5]));

// Total Amount of Points

function points(games) {
    let totalPoints = 0;

    games.forEach(game => {
        const [left, right] = game.split(':');

        if (left > right) {
            totalPoints += 3;
        } else if (left == right) {
            totalPoints += 1;
        }
    });

    return totalPoints;
}

// console.log(points(["1:0", "2:0", "3:0", "4:0", "2:1", "3:1", "4:1", "3:2", "4:2", "4:3"]));
// console.log(points(["1:1", "2:2", "3:3", "4:4", "2:2", "3:3", "4:4", "3:3", "4:4", "4:4"]));

// ================================================================================================

const flip = (d, a) => {
    //TODO
    a.sort((a, b) => a - b); // Ascending order

    d == 'R' ? a : a.reverse();
    return a;
}

// console.log(flip('R', [3, 2, 1, 2]));
// console.log(flip('L', [1, 4, 5, 3, 5]));