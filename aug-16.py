def divisible_by(numbers, divisor):
    return [x for x in numbers if x % divisor == 0]


print(divisible_by([1, 2, 3, 4, 5, 6], 2))
