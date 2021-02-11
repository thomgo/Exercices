## 1\.Exercice 1 : Un échiquier

Votre objectif dans cet exercice est de réprésenter un plateau de jeu d'échec dans la console. Trop compliqué vous dites-vous ?

Pas du tout ! Un plateau d'échec ce ne sont que des cases blanches et noires. Pour représenter les cases noires, vous utiliserez les #. Au final, vous devriez obtenir quelques chose qui ressemble à ça :

```
    "
     # # # # # # # #
    # # # # # # # #
     # # # # # # # #
    # # # # # # # #
     # # # # # # # #
    # # # # # # # #
     # # # # # # # #
    # # # # # # # #
    "
```

## 2\.Exercice 2 : Matrix dans la console

Vous avez probablement déjà vu le film Matrix, vous vous souvenez de ces suites de 0 et de 1 que l'on voyait régulièrement dans le film ? Aujourd'hui vous allez reproduire quelque chose de similaire dans la console.

Votre objectif est de produire un programme qui puisse reproduire le schéma suivant (traits inclus) :

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
Remarquez comment le 1 change de position à chaque fois !

## 3\.Exercice 3 : Nombre paire ?

Vous travaillez sur un site ecommerce et dans votre processus d'achat vous avez besoin de savoir si le montant du panier utilisateur est un nombre paire ou non.

Vous allez donc créer une **fonction** qui peut recevoir un nombre et vérifier que celui est paire. Si c'est le cas elle affiche dans la console true, autrement elle affiche false.

Si le nombre rentré est un nombre à virgule, celui-ci est arrondie à l'entier le plus proche !

## 4\.Exercice 4 : Vous avez dit factorielle ?

La factorielle d'un nombre entier est le produit de l'ensemble des nombres entiers inférieurs ou égaux à ce nombre.

Ainsi la factorielle de 4 vaut 1\*2\*3\*4.

Vous allez créer une fonction qui prend un nombre entier et affiche dans la console sa factorielle. Si le nombre passé dans la fonction n'est pas un entier elle affiche un message d'erreur.

## 5\.Exercice 5 : Les tirets ça compte !

Vous réalisez un programme de facturation pour le service des ventes de votre entreprise. Cependant le responsable des ventes est très pointilleux, il ne veut voir apparaître aucun tiret dans les factures, uniquement des underscores.

Vous allez donc produire une fonction qui prend une string en argument et transforme tout les "-" en "\_". Si autre chose qu'une string est passé à la fonction, celle-ci renvoie un message d'erreur.

## 6\.Exercice 6 : Entraînez-vous avec les tableaux

Creéz un tableau qui contient tout les éléments de votre liste de course.

Affichez ensuite dans la console un message disant que vous devez acheter l'élément en première position du tableau. Faites la même chose avec l'élément en dernière position du tableau (attention vous devez afficher le dernier élément peu importe la taille du tableau !) et avec un élément au milieu (celui que vous voulez).

## 7\.Exercice 7 : Le tableau d'un homme

Vous allez créer un programme avec un tableau qui contient les informations principales d'un être humain, c'est à dire son nom, son prénom, son âge et sa date de naissance.

Remplissez ce tableau avec les valeurs que vous souhaitez !

Dans ce programme un fonction qui peut recevoir un tableau en argument, parcoure le tableau que vous venez de remplir et affichera chaque élément dans la console.

**Pour aller plus loin :**

Notre tableau précédent ne pouvait stocker les informations que d'une seule personne. Refaites le même exercice mais faites en sorte que notre tableau initial puisse contenir les informations de plusieurs personnes.

Ces informations seront elles-mêmes stockées dans d'autres tableaux (un par personne).

Vous pensiez ne jamais utiliser les tableaux multi-dimensionnels ? ;-)

## 8\.Exercice 8 : Le max d'un tableau

Ecrivez une fonction qui parcourt un tableau de nombres et affiche dans la console la plus grande valeur de ce tableau.

**Pour aller plus loin**:

Faites en sorte que votre tableau puisse contenir également des chaînes de caractères. La fonction affichera alors la plus longue.

Attention, il faudra d'abord vérifier que votre tableau ne contient que des chiffres ou que des strings, autrement la fonction affichera false.

## 9\.Exercice 9 : Une to do list

Ecrivez un programme qui demande à l'utilisateur les tâches qu'il doit réaliser avec un prompt, tant qu'il n'a pas rentré "fin" comme réponse.

Les tâches rentrées via le prompt seront stockées dans un tableau et une fois que l'utilisateur aura répondu "fin" vous afficherez les tâches à réaliser dans la console.

## 10\.Exercice 10 : Un jeu en JavaScript

Vous allez réaliser un jeu de pierre, feuille, ciseaux en JavaScript.

Vous demanderez à l'utilisateur quelle réponse il choisit, puis vous déterminerez **au hasard** le choix de l'ordinateur, vous comparerez le choix de l'utilisateur et le choix de l'ordinateur et afficherez qui a gagné.

**Pour aller plus loin**:

Faites rejouer la partie tant qu'aucun des joueurs n'a obtenu 3 points.
