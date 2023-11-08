file = open('day3.txt', 'r')
lines = file.readlines()

total = 0
for line in lines:
    line = line.strip()

    length = len(line)

    compartment_1 = line[:length // 2]
    compartment_2 = line[length // 2:]

    print(line)
    print(compartment_1)
    print(compartment_2)

    for letter in compartment_1:
        if letter in compartment_2:
            priority = ord(letter) - 96
        if priority < 0:
            priority += 58
        total += priority
        break

print(total)