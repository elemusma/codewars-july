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

console.log(points(["1:0", "2:0", "3:0", "4:0", "2:1", "3:1", "4:1", "3:2", "4:2", "4:3"]));
console.log(points(["1:1", "2:2", "3:3", "4:4", "2:2", "3:3", "4:4", "3:3", "4:4", "4:4"]));

// ================================================================================================

const flip = (d, a) => {
    //TODO
    a.sort((a, b) => a - b); // Ascending order

    d == 'R' ? a : a.reverse();
    return a;
}

// console.log(flip('R', [3, 2, 1, 2]));
// console.log(flip('L', [1, 4, 5, 3, 5]));