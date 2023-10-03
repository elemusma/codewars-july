# Count of positives / sum of negatives
def count_positives_sum_negatives(arr):
    positive = 0
    negative = 0
    if arr is None or len(arr) == 0:
        return []
    else:
        for i in range(len(arr)):
            if arr[i] > 0:
                positive += 1
                print("positive")

            if arr[i] < 0:
                print("negative")
                negative -= arr[i]

        if negative == 0:
            return [positive, negative]
        else:
            return [positive, -negative]


print(
    count_positives_sum_negatives(
        [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]
    )
)


def square_sum(numbers):
    # your code here
    arr = []
    for i in range(len(numbers)):
        print(numbers[i])
        arr.append(numbers[i] ** 2)

    return sum(arr)


# print(square_sum([0, 3, 4, 5]))
