**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus.**

## 1\.Exercice 1
Déclarez une variable $items et assignez lui pour valeur array().
Effectuez maintenant un var_dump de la variable.

A la suite, modifiez la valeur de la variable et assignez lui [].
Effectuez maintenant un var_dump de la variable.
Les deux résultats sont-ils différents ? Pourquoi ?

Que signifie le 0 affiché pour chaque résultat ?

A la suite, modifiez la valeur de la variable et assignez lui () sans le mot clef array.
Que se passe-t-il ? Ce résultat est-il normal ?

A la suite, modifiez la valeur de la variable et assignez lui ["a", "b"].
Effectuez maintenant un var_dump de la variable.
Que représente le chiffre 2 maintenant affiché par le var_dump ?
Que représentent [0] et [1] maintenant affichés par le var_dump ?

## 2\.Exercice 2
Déclarez une variable $items et assignez lui pour valeur un tableau en utilisant la notation de votre choix. Ce tableau contiendra les chaînes de caractères suivantes : "premier élément" "deuxième élément" "troisième élément" et "quatrième élément".

Faites un var_dump de $items. Le résultat obtenu est-il le résultat attendu ?

A la suite, affichez l'élément correspondant à $items[1].
Quel est l'élément affiché ? Pourquoi ?

A la suite, affichez l'élément correspondant à $items[3].
Quel est l'élément affiché ? Pourquoi ?

Pouvez-vous maintenant afficher le premier élément du tableau ?

## 3\.Exercice 3
Déclarez une variable $player et assignez lui pour valeur un tableau en utilisant la notation de votre choix. Ce tableau contiendra les éléments suivants : "John" "Doe" 34 et TRUE.

Faites un var_dump de $player.
La variable contient-elle le résultat attendu ?

Pouvez-vous affichez à l'écran le prénom du joueur ?
Pouvez-vous affichez à l'écran le nom du joueur ?
Pouvez-vous affichez à l'écran le prénom et le nom du joueur en une seule chaîne de caractères ?

Pouvez-vous affichez à l'écran l'âge du joueur ?

Pouvez-vous affichez à l'écran le Booléen stocké dans le tableau $player ?

Si notre joueur possédait, admettons, 30 ou 40 caractéristiques, cette notation serait-elle pratique selon-vous ?

## 4\.Exercice 4
Déclarez une variable $player et assignez lui pour valeur un tableau en utilisant la notation de votre choix. Ce tableau contiendra les index et éléments suivants :
- "firstname" "John"
- "lastname" "Doe"
- "age" 34
- "isAdult" TRUE

Faites un var_dump de $player.
La variable contient-elle le résultat attendu ?

Pouvez-vous affichez à l'écran le prénom du joueur ?
Pouvez-vous affichez à l'écran le nom du joueur ?
Pouvez-vous affichez à l'écran le prénom et le nom du joueur en une seule chaîne de caractères ?

Pouvez-vous affichez à l'écran l'âge du joueur ?

Pouvez-vous affichez à l'écran la valeur qui correspond au fait que le joueur est adulte ou non ?

Selon-vous quels sont les avantages de cette notation comparée à celle de l'exercice 3 ?

## 5\.Exercice 5
Déclarez une variable $car et assignez lui pour valeur un tableau en utilisant la notation de votre choix. Ce tableau contiendra les index et éléments suivants :
- "type" "Clio"
- "brand" "Renault"
- "date" 2006
- "color" "orange"
- "passengers" ["Mike", "Claire", "Anna", "Louis"]

Faites un var_dump de $car.
La variable contient-elle le résultat attendu ?

Pouvez-vous afficher la phrase "Une Renault Clio de couleur noir, modèle 2006 a été aperçue avec à son bord 4 passagers" ? Pour ce faire vous produisez une chaîne de caractères à l'aide des informations contenues dans le tableau $car.

Que contient $car à l'indexe "passengers" ? Comment s'appelle ce type de tableau ?

Faites un echo de $car["passengers"][0];
Qu'est ce qui s'affiche ? Pouvez-vous expliquer cette notation en deux temps ?

Pouvez-vous afficher la phrase "4 individus ont été aperçus à son bord : Louis, Claire, Mike et Anna" ? Pour ce faire vous produisez une chaîne de caractères à l'aide des informations contenues dans le tableau $car

## 6\.Exercice 6
Déclarez une variable $a et assignez lui la valeur 14, déclarez également une variable $b et assignez lui la valeur 38.

Déclarez une variable $product et assignez lui un tableau vide.
Faites un var_dump de toutes les variables et vérifiez leur contenu.

A la suite, assignez à $product["price"] la valeur $a.
Faites un var_dump de $product.
Que constatez-vous ? (Vous devez constater deux choses)

A la suite, écrasez $product["price"] avec la valeur $b.
Faites un var_dump de $product.
Que constatez-vous ?
