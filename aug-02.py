def reverse_words(s):
    list = s.split()
    reversed_list = list[::-1]

    return ' '.join(reversed_list)

print(reverse_words("hello world!"))