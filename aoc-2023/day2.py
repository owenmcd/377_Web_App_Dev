file = open('day2.txt', 'r')
lines = file.readlines()

maxRed = 0
maxGreen = 0
maxBlue = 0
cPower = 0
tPower = 0

for line in lines:

    valid = True

    for round in line.split(':') [1].split(';'):
        for color_count in [x.strip() for x in round.split(',')]:
            count, color = [entry.strip() for entry in color_count.split(' ')]
            if (color == 'red' and int(count) > maxRed):
                maxRed = int(count)
            if (color == 'green' and int(count) > maxGreen):
                maxGreen = int(count)
            if (color == 'blue' and int(count) > maxBlue):
                maxBlue = int(count)
    cPower = maxRed * maxGreen * maxBlue
    maxRed = 0
    maxGreen = 0
    maxBlue = 0
    tPower = tPower + cPower
    cPower = 0
print(tPower)
            


    
    
            


    

