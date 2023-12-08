file = open('day1.txt', 'r')
lines = file.readlines()
one = 1
two = 2
three = 3
four = 4
five = 5
six = 6
seven = 7
eight = 8
nine = 9


total = 0
for line in lines:
    #get the first digit
    if first_digit = ''
    for character in line:
        if character.isdigit():
            first_digit = character
            break

    last_digit = ''
    reversed = line[::-1]
    for character in reversed:
        if character.isdigit():
            last_digit = character
            break

    total += int(first_digit + last_digit)

print('total' + str(total))