**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus.**

## 1\.Exercice 1
Copiez le bloc de code suivant dans votre fichier de travail
```
if (TRUE) {
  echo "Condition is working !";
}
```
Voyez-vous quelque chose s'afficher à l'écran ? Pourquoi ?

Copiez à la suite le bloc de code suivant
```
if (FALSE) {
  echo "Condition is working !";
}
```
Voyez-vous quelque chose s'afficher à l'écran ? Pourquoi ?

Dans quel cas la condition a-t-elle été vérifiée ?

Rajoutez maintenant à la suite de votre second if un bloc else
```
else {
  echo "Condition is not working !";
}
```
Que voyez-vous alors s'afficher à l'écran ? Pourquoi ?

Copiez maintenant à la suite le bloc de code suivant
```
if (FALSE === FALSE) {
  echo "Condition is working !";
}
```
Voyez-vous quelque chose s'afficher à l'écran ? Pourquoi ?
Qu'en déduisez-vous sur la notation utilisée dans les deux premiers  blocs if que vous avez écrits précédemment ? Quelle était l'évaluation réalisée ?

## 2\.Exercice 2
Déclarez une variable $content sans lui attribuer de valeur pour l'instant.
A la suite, copiez ce bloc de code :
```
if ($content) {
  echo "Condition is OK";
}
else {
  echo "Condition is KO";
}
```

Que voyez-vous s'afficher à l'écran ? Pourquoi ?

Nous allons maintenant faire varier la valeur de $content afin d'observer le comportement du code.

Assignez à $content la valeur TRUE.
Qu'est ce qui s'affiche à l'écran ? La condition est-elle vérifiée ? Pourquoi ?

Assignez à $content la valeur FALSE.
Qu'est ce qui s'affiche à l'écran ? La condition est-elle vérifiée ? Pourquoi ?

Assignez à $content la valeur "texte".
Qu'est ce qui s'affiche à l'écran ? La condition est-elle vérifiée ? Pourquoi ?

Assignez à $content la valeur 123.
Qu'est ce qui s'affiche à l'écran ? La condition est-elle vérifiée ? Pourquoi ?

## 3\.Exercice 3
Déclarez une variable $price et assignez lui la valeur 45.
Copiez à la suite la structure conditionnelle suivante :
```
if ($price === 45) {
  echo "The price is an int";
}
elseif ($price == 45) {
  echo "The price is a string";
}
else {
  echo "The price is something else";
}
```
Qu'est ce que qui s'affiche à l'écran ? Pourquoi ? Quelle condition est vérifiée ?

Assignez maintenant à $price la valeur "45"
Qu'est ce que qui s'affiche à l'écran ? Pourquoi ? Quelle condition est vérifiée ?

Assignez maintenant à $price la valeur "forty five"
Qu'est ce que qui s'affiche à l'écran ? Pourquoi ? Quelle condition est vérifiée ?

## 4\.Exercice 4

Nous allons maintenant vérifiez qu'un visiteur a l'âge requis pour rentrer sur notre site.

Vous déclarerez une variable $age qui stocke l'âge de votre choix. Votre programme doit remplir les condition suivantes :
- Si l'âge du visiteur et supérieur ou égal à 18 alors le message "Entry allowed" s'affiche
- Si l'âge du visiteur est inférieur à 18 alors le message "Entry not allowed" s'affiche

Vous testez votre programme avec différentes valeurs pour la variable $age. Vous verifiez notamment que les personnes de pile 18 ans ne sont pas refoulées.

## 5\.Exercice 5

Le programme suivant ne fonctionne pas. Serez-vous capable de le debuguer ?

La variable $store contient un tableau qui représente un magasin. On trouve dans l'ordre : la marque du magasin, l'état où il se trouve, la ville où il se trouve et le nombre d'employés. Le code est censé se comporter de la manière suivante :
- Si le magasin est un Walmart dans la ville de South-Park alors le message "The Walmart in South-Park has 483 employes" s'affiche.
- Si le magasin est un Walmart qui n'est pas à South-Park mais qui est quand même au Colorado, alors le message "Hum this is an other Walmart from Colorado" s'affiche.
- Si le magasin est un Walmart qui n'est pas dans le Colorado, alors le message "Too bad this is just a Walmart" s'affiche.
- Si le magasin n'est pas un Walmart alors le message "I do not know what this is" s'affiche.

```
$store = ["Walmart", "Colorado", "South-Park", 483,];

if ($store[0] = "Walmart" && $store[1] = "South-Park") {
  echo "The Walmart in South-Park has " . $store[3] . " employes"
}
else ($store[0] = "Walmart" || $store[1] = "Colorado") {
  echo "Hum this is an other Walmart from Colorado";
}
else ($store[0] = "Walmar") {
  echo "Too bad this is just a Walmart";
}
else {
  echo "test";
```
Faites varier le contenu du tableau $store afin de tester tous les cas de figure.

## 6\.Exercice 6
Déclarez une variable $student. Celle-ci contient un tableau associatif représentant un élève.
Le tableau contient les indexes et valeurs suivants :
- "Name" "John Doe"
- "Grade" 14

Ecrivez une structure conditionnelle qui affiche la mention obtenu par l'élève selon sa note.
- Inférieur à 10, le message "Recalé" s'affiche
- Entre 10 et 12, le message "Passable" s'affiche
- Entre 12 et 14, le message "Moyen" s'affiche
- Entre 14 et 16, le message "Bien" s'affiche
- Entre 16 et 20, le message "Très bien" s'affiche

Quelle est la mention affiché pour notre étudiant ?

Faites varier la valeur de l'indexe grade afin de tester chaque condition de la structure.

## 7\.Exercice 7
Déclarez une variable $meal. Celle-ci contient un tableau associatif représentant un repas. Le tableau contient les indexes et valeurs suivants :
- "foodType" "meat"
- "cookedAt" 80
- "temperature" 60

Ecrivez une structure conditionnelle qui détermine le statut du repas.
- Si la température du repas est identique à la température de cuisson alors ajouter un index "status" avec la valeur "Cooked" au tableau.
- Si la température du repas est inférieure à la température de cuisson alors ajouter un index "status" avec la valeur "Uncooked" au tableau.
- Si la température du repas est supérieure à la température de cuisson alors ajouter un index "status" avec la valeur "Overcooked" au tableau.

Affichez à l'écran la valeur de l'indexe "status".
Faites varier la température du repas pour tester toutes les conditions.

## 8\.Exercice 8
Le code suivant ne fonctionne pas correctement. Serez-vous capable de le débuguer ?

Ce programme doit normalement s'assurer qu'un nombre est positif, autrement il demande de rentrer un nombre supérieur à 0. Si le nombre est positif il vérifie alors si ce nom est pair ou impair et affiche un message en conséquence ?

```
$number = 42;
if ($number < 0) {
  if($number%2 = 0) {
    echo "$number is even";
  }
  else {
    echo "$number is odd";
}
echo "Please enter a number at least greater than 0";
```
Qu'est ce que qui est censé s'afficher avec la valeur actuelle de $number ?
Que signifie le signe % en programmation ?
Faites varier la valeur de $number afin de vérifier que toutes les conditions sont respectées.
