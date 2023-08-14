def draw_stairs(n):
    result = ""
    space_to_repeat = " "

    for i in range(n):
        if i < n - 1:
            result += (i * space_to_repeat) + "I\n"
        else:
            result += (i * space_to_repeat) + "I"

    return result


# print(draw_stairs(5))

import math


def square_or_square_root(arr):
    return [math.sqrt(i) if math.sqrt(i).is_integer() else i * i for i in arr]
