def square_sum(numbers):
    # your code here
    arr = []
    for i in range(len(numbers)):
        print(numbers[i])
        arr.append(numbers[i] ** 2)

    return sum(arr)


print(square_sum([0, 3, 4, 5]))
