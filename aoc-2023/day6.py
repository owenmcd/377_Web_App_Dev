num = 1
cDistance = 0
ways = 0
time = 35937366
distance = 212206012011044

while (num <= time):
    cDistance = (time - num) * num
    
    if cDistance > distance:
        ways = ways + 1
    num = num + 1
print(ways)


    