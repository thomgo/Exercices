import math

#Exercice 1 : Le nombre le plus grand

firstNumber = 5
secondNumber = 2
thirdNumber = 18
fourthNumber = 47

def findBiggestNumber(a, b, c, d) :
    if a > b and a > c and a > d :
        print(a)
    elif b > a and b > c and b > d :
        print(b)
    elif c > a and c > b and c > d :
        print(c)
    else :
        print(d)

findBiggestNumber(firstNumber, secondNumber, thirdNumber, fourthNumber)

#Exercice 2 : Conditon d'âge

userAge = input("Quel âge avez-vous ?")

if len(userAge) > 0 :
    userAge = int(userAge)
    if userAge > 0:
        if userAge >= 21 :
            print("vous pouvez entrer !")
        if userAge%2 == 0 :
            print("Votre âge est paire")
        if math.sqrt(userAge).is_integer() :
            print("Votre âge est un carré")
    else :
        print("Rentrez votre vrai âge !")
else :
  print("Vous n'avez rien rentré !")


#Exercice 3 : Le nombre caché

hiddenNumber = 20
userGuess = None

while hiddenNumber != userGuess :
  userGuess = int(input("Quel est le nombre caché ?"))
  if userGuess > hiddenNumber :
    print("Trop haut !")
  elif userGuess < hiddenNumber :
    print("Trop bas")
  else :
    print("Trouvé !")



#Exercice 4 : Des nombres en boucle

for i in range(1,101):
    print(i)

#Exercice 5 : Des nombres en boucle bis

for i in range(1,101) :
    if i%2 == 0 :
        print(i)



#Exercice 6 : Remplir la piscine

def remplissagePiscine(long, larg, prof, debit) :
  tempsRemplissage = (long*larg*prof)/debit
  print("Le temps de remplissage est de {} minutes".format(tempsRemplissage))


remplissagePiscine(10, 5, 2, 10)

#Exercice 7 : Calcule de cercle

def getPerimetre(rayon) :
  perimetre = round((2 * math.pi * rayon),2)
  print("Votre cercle a un perimètre de {} cm".format(perimetre))


def getAire(rayon) :
  aire = round((math.sqrt(rayon) * math.pi),2)
  print("Votre cercle a une aire de {} cm carrés".format(aire))


rayon = int(input("Quel est le rayon de votre cercle ?"))

getPerimetre(rayon)
getAire(rayon)

#Exercice 8 : Une pyramide

pyramide = "\n"
row  = ""
for i in range(1,6) :
  row += "*"
  pyramide += row + "\n"


print(pyramide)

#Exercice 9 : FIZZ BUZZ

for i in range(1,100) :
  if i%15 == 0 :
    print("FIZZBUZZ")
  elif i%5 == 0 :
    print("BUZZ")
  elif i%3 == 0 :
    print("FIZZ")
  else :
    print(i)
