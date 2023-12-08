file = open('day4.txt', 'r')
lines = file.readlines()

tPoints = 0

for line in lines:
    round = line.split(':')[1]
    wNums, yNums = [entry.strip() for entry in round.split('|')]
    wNums = wNums.split()
    yNums = yNums.split()
    points = 0
    for number in wNums:
        
        if (number in yNums):
            if (points == 0):
                points = 1
            else:
                points *= 2
    
    tPoints = tPoints + points

print(tPoints)
        


