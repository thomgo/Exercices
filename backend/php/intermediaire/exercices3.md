## 1\.Exercice 1 : Un échiquier
*notions : boucle, string, évaluation, condition*

Vous réalisez un programme qui affiche sur une page web un plateau d'échec

Il s'agira d'une représentation symbolique. Les cases noires seront représentées par des # et les cases blanches par des O. Pour rappel, un plateau d'échec contient 8 rangées de 8 cases chacune avec une alternance de noir et de blanc.

Résultat attendu :

```
#O#O#O#O
O#O#O#O#
#O#O#O#O
O#O#O#O#
#O#O#O#O
O#O#O#O#
#O#O#O#O
O#O#O#O#
```
**Attention le plateau de jeu doit être représenté par une seule et unique chaîne de caractères**

## 2\.Exercice 2 : Matrix dans le navigateur
*notions : boucle, string, évaluation, condition*

Vous avez probablement déjà vu le film Matrix, vous vous souvenez de ces suites de 0 et de 1 que l'on voyait régulièrement dans le film ? Aujourd'hui vous allez reproduire quelque chose de similaire sur une page web.

Votre objectif est de réaliser un programme qui reproduise le schéma suivant, traits inclus. Remarquez comment le 1 change de position à chaque fois :

```
1
0
0
0
"-------"
0
1
0
0
"-------"
0
0
1
0
"-------"
0
0
0
1
"-------"

```

## 3\.Exercice 3 : Vous avez dit factorielle ?
*notions : fonction, boucle, integer, évaluation*

La factorielle d'un nombre entier est le produit de l'ensemble des nombres entiers inférieurs ou égaux à ce nombre.

Ainsi la factorielle de 4 vaut 1\*2\*3\*4 soit 24.

Vous allez créer une fonction qui prend un nombre entier et retourne sa factorielle.

Affichez ensuite la valeur retournée

## 4\.Exercice 4 : Devine à quoi je pense
*notions : tableau, boucle, string, évaluation, random*

Dans cet exercice vous allez simuler une intelligence artificielle.

Un joueur et l'ordinateur vont joueur à un jeu. Le joueur choisit au hasard un mot parmi une liste et l'ordinateur doit deviner ce mot. Tant que l'ordinateur n'a pas deviné le mot il continue de jouer. A chaque tour on affiche le tour de jeu et le mot choisi par l'ordinateur.

Voici la liste de mot : car, boat, toy, green, big, super, game, computer.

Exemple de déroulé de jeu :
```
Player one choose the word : computer
Turn 1, computeur says : big
Turn 2, computeur says : big
Turn 3, computeur says : car
Turn 4, computeur says : toy
Turn 5, computeur says : computer
```
Pour aller plus loin, vous devez vous rendre compte d'un problème de logique dans le déroulé ci-dessous. L'ordinateur donne big au tour 1 et 2 or s'il est logique au tour deux il sait que big n'est pas le mot recherché.

Faites en sorte que l'ordinateur ne puisse pas donner deux fois le même mot et donc deux fois la même mauvaise réponse. Dans ce cas de figure le nombre maximum de tour sera forcément le nombre de mots contenus dans la liste. Attention cependant cette amélioration est plus complexe à mettre en oeuvre. Ce n'est pas grave si vous n'y arrivez pas mais elle permet de manipuler les tableaux en profondeur.

## 5\.Exercice 5 : Un catalogue de produits
*notions : tableau, boucle, string, évaluation*

Une usine produit des voitures, votre travail est d'afficher à l'écran les modèles au catalogue.

Voici la variable de départ contenant toutes les informations nécessaires :
```
$factory = [
  "location" => "Rouen",
  "name" => "Car factory",
  "employees" => 1246,
  "creation" => 1954,
  "product" => "cars",
  "models" => [
    [
      "model" => "Clio",
      "price" => 12000,
      "colors" => "black/white/red/green"
    ],
    [
      "model" => "Astra",
      "price" => 14000,
      "colors" => "black/white/red"
    ],
    [
      "model" => "Panda",
      "price" => 9000,
      "colors" => "black/white/red/yellow"
    ],
    [
      "model" => "Yaris",
      "price" => 15000,
      "colors" => "black/white/red/green/yellow/blue"
    ]
  ]
];
```
Résultat attendu, attention on n'affiche mais les couleurs disponibles mais leur nombre :

```
The Car factory in Rouen products the following models :
MODEL : Clio
PRICE : 12000
COLORS : 4 colors available
--------------
MODEL : Astra
PRICE : 14000
COLORS : 3 colors available
--------------
MODEL : Panda
PRICE : 9000
COLORS : 4 colors available
--------------
MODEL : Yaris
PRICE : 15000
COLORS : 6 colors available
--------------
```
