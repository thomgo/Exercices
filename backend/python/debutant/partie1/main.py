# Exercice 1 hello World

print("Hello world")

hello = "Hello World"
print(hello)

# Exercice 2 Calculs divers

print(3 * 3) #affiche 9
#print(12 / 0) #lève une exception ZeroDivisionError
print(4 + 9 + 78) #affiche 91
print(12 - 7) #affiche 5
print(5e4) #affiche 50000.0

# Exercice 3 Communiquer avec l'ordinateur

name = input("Quel est votre nom ?")
print("Bonjour {}".format(name))

# Exercice 4 Nom et prénom

nom = "Gossart"
prenom = "Thomas"

print("Bonjour {} {}".format(prenom, nom))

# Exercice 5 Des caractères aux nombres

my_number = "123"

print(int(my_number))

# Exercice 6 Majuscules et miniscules

user_sentence = input('Quel est votre text ?')

min = user_sentence.lower()
print(min)

maj = user_sentence.upper()
print(maj)
