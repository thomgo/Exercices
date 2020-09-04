#Exercice 1 True ou False

un = ""
deux = "test"

if len(un) == 0 :
  print (False)
else :
  print(True)


if len(deux) == 0 :
  print (False)
else :
  print(True)


#Exercice 2 Calculer mon âge

#Get the current date and the birthDate from the user
currentDate = input("En quelle année sommes-nous ?")
birthDate = input("Quand êtes-vous né ?")

# Convert the strings into numbers
currentDate = int(currentDate)
birthDate = int(birthDate)

# Count the age of the user and show it
age = currentDate - birthDate
print("Vous avez {} ans".format(age))

# Get the age of the neighbour and convert it to number
nextAge  = input("Quelle âge a la personne à côté de vous ?")
nextAge = int(nextAge)

# Count the sum of the two ages and show it
age = age + nextAge
print("A vous deux vous avez {} ans".format(age))

#Exercice 3 Problème de chaussures

prix1 = 70
prix2 = 59
prix3 = 20
total = prix1 + prix2 + prix3

print("Marc paiera {} euros avec sa réduction".format(total*0.8))

#Exercice 4 Une calculatrice JavaScript

firstNumber = float(input("Quel est le premier nombre ?"))
secondNumber = float(input("Quel est le deuxième nombre ?"))
print("Total : {}".format(firstNumber + secondNumber))

#Exercice 5

lastName = input("Quel est votre nom ?").upper()
lnLetters = lastName[0] + lastName[-1]
print("Voici la première et la dernière lettre de votre nom " + lnLetters)

firstName = input("Quel est votre prénom ?").upper()
fnLetters = firstName[0] + firstName[-1]
print("Voici la première et la dernière lettre de votre prénom " + fnLetters)

print("Voici les deux mis ensemble " + lnLetters + fnLetters)

age =  int(input("Quel est votre âge ?"))
age = round(age/33)

print("Divisé par 33 cela donne " + str(age))
