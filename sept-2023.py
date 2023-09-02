def flip(d, a):
    # Do some magic
    a.sort()
    return a[::-1] if d == "L" else a


print(flip("R", [3, 2, 1, 2]))
print(flip("L", [1, 4, 5, 3, 5]))
