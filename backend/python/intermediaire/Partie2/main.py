#Exercice 1

board = ""

for i in range(1,8) :
    for j in range(1, 17) :
        if (j+i)%2==0 :
            board += "O"
        else :
            board += "X"
    board += "\n"
board += "\n"

print(board)

#Exercice 2

matrix = ""

for i in range(1,5) :
    for j in range(1,5) :
        if i == j :
            matrix += "1 \n"
        else :
            matrix += "0 \n"
    matrix += "-------- \n"

print(matrix)

#Exercice 3

def is_odd(amont) :
    amont = round(int(amont))
    if amont%2 == 0 :
        print(True)
    else :
        print(False)

is_odd(24.32)
is_odd(33.34)


#Exercice 4

def factorielle(value) :
    if isinstance(value, int) :
        result = 1
        for i in range (1,value) :
            result += result * i
        print(result)
    else :
        print("erreur")

factorielle(4)

#Exercice 5

def to_underscore(string) :
    if isinstance(string, str) :
        string = string.replace('-', "_")
        print(string)
    else :
        print("Attention il faut passer une string en argument")

to_underscore('Une-phrase-avec des tirets')

#Exercice 6

shoppingList = [
    "pâtes",
    "riz",
    "viande",
    "coca",
    "haricots"
]

print("Il faut acheter : " + shoppingList[0])
print("Il faut acheter : " + shoppingList[-1])
print("Il faut acheter : " + shoppingList[2])

#Exercice 7

people = [
    ["Paul","Homme",44],
    ["Stephanie","Femme",32],
    ["Marc","Homme",24]
]

def showPeople(list_of_people) :
    for people in list_of_people :
        print('------------')
        for value in people:
            print(value)

showPeople(people)

#Exercice 8

list_of_numbers = [12, 45, 190, 150, 8, 21]

def findBiggestNumber(numbers) :
    biggestNumber = numbers[0]
    for number in list_of_numbers:
        if number > biggestNumber :
            biggestNumber = number
    print(biggestNumber)

findBiggestNumber(list_of_numbers)


#Exercice 9

tasks = []
task = ""

while task != "fin" :
  task = input("Que devez-vous faire ?")
  tasks.append(task)

for task in tasks :
  print(task)
