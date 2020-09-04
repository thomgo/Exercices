**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus et une ou plusieurs autres pages qui serviront à stocker les classes créées.**

## 1\.Exercice 1
Dans un fichier nommé dog.php intégrez le code suivant :

```
class Dog
{

}
```
Que venez-vous de faire ?
A quoi sert le mot-clef "class" ?
Quel est le nom de la classe que nous venons de créer ?
La classe aurait-elle pu porter un nom différent ?
Pouvez-t-on écrire dog avec une minuscule ? Pourquoi ?

Dans un fichier index.php, importez le contenu du fichier dog.php à l'aide de la fonction require.

Quelle autre fonction permet d'importer le contenu d'un fichier dans un autre en PHP ? Quelle est la différence principale entre ces deux fonctions ?

Maintenant au sein de votre fichier index.php, avez-vous accès à la classe Dog ?

A là suite recopiez le code suivant :

```
$dog1 = new Dog();
```
Comment s'appelle l'opération que vous venez de réaliser ?

Faites un var_dump de $dog1.
Qu'est ce qui est stocké dans $dog1 ? En quoi est ce différent de la classe Dog ?

Vous allez maintenant déclarer une variable $dog2 et lui assigner pour valeur une instance de la classe Dog.
Faites un var_dump de $dog2.
$dog1 et $dog2 sont-ils identiques ? Quelle différence entre les deux pouvez-vous remarquer ?

Déclarez maintenant une variable $dog3 et assignez lui pour valeur $dog2. Faites un var_dump de $dog3.
Qu'est ce qui est stocké dans $dog3 ?
Qu'elle est la différence entre cette procédure et celle utilisée précédemment pour créer de nouveaux objets ? Laquelle des deux doit être le plus souvent utilisée dans un programme ? Pourquoi ?

## 2\.Exercice 2
Dans un fichier nommé customer.php déclarez une classe vide Customer et importez cette classe dans votre fichier index.php.

Dans une variable $customer, stockez une instance de la classe Customer. Faites un var_dump de $customer. Que contient la classe ? Est ce normal ?

En l'état cette instance nous sert-elle à quelque chose ?

A la suite, intégrez le code suivant :
```
$customer->name = "Doe";
```
Faites un var_dump de $customer. Quelles différences constatez-vous par rapport au précédent var_dump ?

Qu'avez vous rajouté à votre objet stocké dans $customer ? Comment cela s'appelle-t-il en POO ? Quel est l'équivalent en programmation classique ?

Ajoutez maintenant les attributs suivants à votre objet :
- firstname qui contient la string John
- age qui contient l'integer 42
- payments qui contient un tableau avec les strings visa, mastercard et paypal

Faites un var_dump de $customer. L'objet contient-il tous les attributs attendus ?

Quelles sont les types de données acceptables pour un attribut ?

Dans une variable $customer2 stockez une nouvelle instance de la classe Customer.
Faites un var_dump de $customer2. Que constatez-vous ? Selon-vous quel est le problème avec la méthode que nous avons utilisée jusqu'à présent pour déclarer des attributs ?

Voyons maintenant jusqu'où peut aller la puissance de la POO. Admettons que notre utilisateur possède également un chien (cela pourrait être intéressant de le savoir si par exemple nous vendons des produits pour animaux). A supposer que vos deux exercices soient sur la même page, ajoutez maintenant le code suivant :
```
$customer->dog = $dog1;
```
Refaites un var_dump de $customer. Que contient l'attribut dog ?
Quelle est la relation dans le monde réel que nous venons de modéliser en POO ?
