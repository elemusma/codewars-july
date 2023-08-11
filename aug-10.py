def monkey_count(n):
    #your code here
    arr = []
    
    for i in range(n):
        i += 1
        arr.append(i)

    return arr

print(monkey_count(5))