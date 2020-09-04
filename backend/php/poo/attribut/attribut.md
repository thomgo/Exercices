**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus et une ou plusieurs autres pages qui serviront à stocker les classes créées.**

## 1\.Exercice 1
Dans un fichier customer.php déclarez une classe Customer que vous laissez vide pour l'instant. Importez cette classe dans un fichier index.php. Instanciez un objet customer et stockez le dans une variable $customer.

Faites un var_dump de $customer. Que contient votre variable ?

Dans la classe Customer, rajoutez la ligne suivante :
```
public $name;
```
Qu'affiche maintenant le var_dump ? Que venons-nous de faire ?
Dans la déclaration précédente, que représente $name ? Que représente public ?

De la même manière pouvez-vous déclarer les attributs firstname, age et payments au sein de la classe Customer ?

Déclarez une variable $customer2 et stockez y une instance de la classe Customer.
Faites un var_dump de $customer2. Quelle est la différence avec l'objet stocké dans $customer ? Quelle la différence avec le résultat obtenu à l'exercice précédent dans la même situation ?

Pouvez-vous déduire un des avantages qu'il y a à déclarer ses attributs dans la classe et non pour chaque objet instancié ?

Vous allez maintenant modifier légèrement la déclaration de vos attributs de la manière suivante :
```
public string $name;
```
Que venez-vous d'indiquer à propos de l'attribut $name ?

Faites de même pour les autres attributs sachant que firstname est de type string, age de type integer et payments de type array.

Donnez maintenant les valeurs attendues aux attributs de l'objet contenu dans $customer. Vous pouvez reprendre les valeur de l'exercice précédent.

Que se passe-t-il si par exemple vous remplacez la valeur "John" par 123 quand vous attribuez une valeur à vos attributs ? Pourquoi ?

## 2\.Exercice 2
Nous allons maintenant manipuler les attributs de l'objet que nous avons créé précédemment.

Ajoutez la ligne suivante :
```
$customer->name = strtoupper($customer->name);
```
Faites un var_dump de $customer. Que s'est-il passé ? Quelle est la différence avec la syntaxe classique suivante et pourquoi n'était-elle pas employable ici ?
```
$name = strtoupper($name);
```
Modifiez de la même manière l'attribut firstname en le passant en majuscule.
Ajoutez le moyen de paiement "cash" au tableau contenu dans l'attribut payments. Vous pouvez utiliser la fonction array_push ou la syntaxe raccourcie.

Vérifiez à l'aide du var_dump que les valeur ont bien été modifiées.

Avec ce que vous venez de voir sur l'usage des attributs, essayez d'afficher le résultat suivant à l'écran :
```
JOHN DOE is 42 years old.
He has the following means of payement :
- visa
- mastercard
- paypal
- cash
```
