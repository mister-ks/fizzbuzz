# coding:utf-8

for i in range(101):
    if i%3 != 0 and i%5 != 0:
        print(i)
    elif i%3 == 0 and i%5 != 0:
        print("fizz")
    elif i%3 != 0 and i%5 == 0:
        print("buzz")
    elif i%3 == 0 and i%5 == 0:
        print("fizzbuzz")
