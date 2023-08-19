def format_money(amount):
    # your formatting code here
    return f"${'{:.2f}'.format(amount)}"


def difference_in_ages(ages):
    # your code here
    return (min(ages), max(ages), max(ages) - min(ages))


# print(difference_in_ages([16, 22, 31, 44, 3, 38, 27, 41, 88]))


def elevator(left, right, call):
    # pass  # Code on! :)
    return "left" if abs(left - call) < abs(right - call) else "right"


print(elevator(0, 1, 0))
