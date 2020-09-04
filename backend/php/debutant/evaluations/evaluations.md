**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus.**

## 1\.Exercice 1
Affichez à l'écran l'opération 15*26.
Que s'affiche-t-il ? Pourquoi ?

Stockez maintenant l'opération 15*26 dans une variable $result et affichez le contenu de cette variable.
L'affichage est-il différent du précédent ?

Dans une variable $a stockez maintenant 15 et dans une variable $b stockez 26. A la suite, réassignez la valeur de $result à $a * $b.
Affichez le contenu de $result. Le résultat est-il différent ? Pourquoi ?

## 2\.Exercice 2
Déclarez une variable $result et assignez lui l'opération 78+9-15.
Affichez la variable.
Quel résultat obtenez-vous ?

A la suite, réassignez à $result l'opération 78*9-15 et affichez le contenu de la variable.
Quel résultat obtenez-vous ?

A la suite, réassignez à $result l'opération 78*(9-15) et affichez le contenu de la variable.
Quel résultat obtenez-vous ? Est-il différent du précédent ? Pourquoi ?

A la suite, réassignez à $result l'opération 9/15 et affichez le contenu de la variable.
Quel résultat obtenez-vous ? Quel est le type de données ?

## 3\.Exercice 3

Déclarez une variable $result et assignez lui la valeur suivante 5e3.
Affichez le contenu de la variable.

A la suite, réassignez à $result la valeur 5e6 et affichez le contenu de la variable.
Quels résultats obtenez-vous ? Selon-vous comment fonctionne cette notation ?

A la suite, réassignez à $result la valeur 5/0 et affichez le contenu de la variable.
Quel résultat obtenez-vous et que signifie-t-il ?

A la suite, réassignez à $result la valeur 0/0 et affichez le contenu de la variable.
Quel résultat obtenez-vous et que signifie-t-il ?

## 4\.Exercice 4

Déclarez une variable $amount et assignez lui la valeur 150.

A la suite, avec vos connaissances trouvez une opération à réassigner à la variable $amount qui permettra d'augmenter sa valeur de 10.

Attention, nous attendons une **opération**, vous ne pouvez donc pas écrire $amount = 160, ce serait trop simple. De même votre opération doit fonctionner quelque soit la valeur de $amount, autrement-dit vous ne pouvez pas écrire $amount = 150 + 10 puisque si $amount valait 140 le résultat ne serait pas bon.

Vérifiez votre résultat en affichant la valeur de $amount à l'écran.

## 5\.Exercice 5

Déclarez une variable $price et assignez lui la valeur 48.
Affichez la valeur de $price.

A la suite, assignez à $price une nouvelle valeur à savoir l'opération $price + 1.
Affichez la valeur de $price.
Que s'est-t-il passé ? Pouvez-vous expliquer ce processus ?

A la suite, assignez à $price une nouvelle valeur, à savoir l'opération $price -1.
Affichez la valeur de $price.
Que s'est-t-il passé ? Pouvez-vous expliquer ce processus ?

A la suite, assignez à $price une nouvelle valeur de la manière suivante $price += 1.
Affichez la valeur de $price.
Que s'est-t-il passé ?

A la suite, assignez à $price une nouvelle valeur de la manière suivante $price -= 1.
Affichez la valeur de $price.
Que s'est-t-il passé ?

A la suite, assignez à $price une nouvelle valeur de la manière suivante $price ++
Affichez la valeur de $price.
Que s'est-t-il passé ?

A la suite, assignez à $price une nouvelle valeur de la manière suivante $price --
Affichez la valeur de $price.
Que s'est-t-il passé ?

## 6\.Exercice 6
**pour cet exercice utilisez la fonction var_dump() au lieu de echo pour l'affichage**
Déclarez une variable $word et assignez lui la chaîne de caractères "car".
Affichez le résultat de l'évaluation de $word = "car".
Qu'est ce qui s'affiche à l'écran ?

Affichez maintenant le résultat de l'évaluation de $word === "car".
Qu'est ce qui s'affiche à l'écran ? Qu'est ce qui a changé dans les deux instructions ? Qu'est ce qui est évalué dans un cas et dans l'autre ?

Affichez maintenant le résultat de l'évaluation de $word = "bus".
Qu'est ce qui est affiché à l'écran ?

Affichez à nouveau le résultat de l'évaluation de $word === "car".
Qu'est ce qui s'affiche à l'écran ? Est ce le résultat attendu ?

Affichez maintenant le résultat de l'évaluation de $word !== "car".
Qu'est ce qui s'affiche à l'écran ? Qu'est ce qui a changé dans les deux instructions ? Qu'est ce qui est évalué dans un cas et dans l'autre ?

## 7\.Exercice 7
**pour cet exercice utilisez la fonction var_dump() au lieu de echo pour l'affichage**
Déclarez une variable $userAge et assignez lui la chaîne de caractère "42".

Affichez maintenant le résultat de l'évaluation de $userAge === "42".
Qu'est ce qui est affiché à l'écran ?

Affichez maintenant le résultat de l'évaluation de $userAge === 42.
Qu'est ce qui est affiché à l'écran ? Les deux résultats sont-ils identiques ? Pourquoi ?

Affichez maintenant le résultat de l'évaluation de $userAge == 42.
Qu'est ce qui est affiché à l'écran ? Les deux résultats sont-ils identiques ? Pourquoi ?

## 8\.Exercice 8
Déclarez une variable $firstName et assignez lui pour valeur "John".
Déclarez une variable $lastName et assignez lui pour valeur "Doe";

Déclarez une variable $fullName et assignez lui pour valeur $firstName . $lastName
Affichez la valeur de $fullName. Qu'est ce qui s'affiche à l'écran ? Quelle est l'opération que vous venez de réaliser ?

Seriez-vous maintenant capable de faire en sorte que le prénom et le nom dans $fullName soient séparés par un espace ?

## 9\.Exercice 9
Déclarez les variables suivantes et assignez leur les valeurs associées :
- $a -> "d"
- $b -> "a"
- $c -> "b"
- $d -> "c"

Seriez-vous capables de stocker dans une variable $alphabet le résultat d'une opération qui produirait une seule chaîne de caractères avec les lettres de l'alphabet dans l'ordre sur la base des variables données ?

Affichez le contenu de la variable $alphabet.

## 10\.Exercice 10
Déclarez une variable $name et assignez lui la valeur "Maggie".

Affichez maintenant la chaîne de caractères suivante "Hello $name".
Qu'est ce qui s'affiche à l'écran ? Quel phénomène/opération s'est produit ici ?

Modifiez maintenant la chaîne de caractère en remplaçant les guillemets doubles par des guillemets simples comme ceci 'Hello $name'.
Que se passe-t-il ? Qu'en déduisez-vous ?
