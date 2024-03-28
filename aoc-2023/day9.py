file = open('day9-snippet.txt', 'r')
lines = file.readlines()
incr = 0
cNum = 0
nNum = 0
nums = 0
turn = 0

for line in lines:
    nums = line.split(' ')
    for number in nums:
        cNum = int(nums[turn])
        nNum = int(nums[turn + 1])
        incr = (nNum - cNum)
        print(incr)
        turn +=1
        

        

    
