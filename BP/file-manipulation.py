import os
import shutil

def rename():
    path = input("Enter the path: ")
    prefix = input("enter the filename prefix: ")

    i = 0
    files = os.listdir(path)
    files.sort()
    for filename in files:
        extension = filename.split(".")[1]
        source = path + filename
        destination = path + prefix



def copy_file():
    original = 'C:/Users/omcdonough24/Desktop/BP/bodie3.jpg'
    filename, extension = original.split('.')
    for i in range(5):
        copy_filename = filename + ' - copy' + str(i + 1) + '.' + extension
        print(copy_filename)
        shutil.copyfile(original, copy_filename)

copy_file()