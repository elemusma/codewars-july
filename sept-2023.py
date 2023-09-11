# Beginner - Reduce but Grow


def grow(arr):
    product = 1

    for item in arr:
        product *= item

    return product


print(grow([1, 2, 3]))
print(grow([4, 1, 1, 1, 4]))

# Sum of positive


def positive_sum(arr):
    # Your code here
    sum = 0

    for i in range(len(arr)):
        if arr[i] > 0:
            sum += arr[i]

    return sum


# print(positive_sum([1, 2, 3, 4, 5]))
# print(positive_sum([1, -2, 3, 4, 5]))

# Total Amount of Points


def points(games):
    total_points = 0
    for game in games:
        left, right = game.split(":")
        if left > right:
            total_points += 3
        elif left == right:
            total_points += 1

    return total_points


# print(points(["1:0", "2:0", "3:0", "4:0", "2:1", "3:1", "4:1", "3:2", "4:2", "4:3"]))
# print(points(["1:1", "2:2", "3:3", "4:4", "2:2", "3:3", "4:4", "3:3", "4:4", "4:4"]))


# ====================================================================================


def flip(d, a):
    # Do some magic
    a.sort()
    return a[::-1] if d == "L" else a


# print(flip("R", [3, 2, 1, 2]))
# print(flip("L", [1, 4, 5, 3, 5]))
