**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus et une ou plusieurs autres pages qui serviront à stocker les classes créées.**

## 1\.Exercice 1
Sur un fichier bird.php créez une classe Bird qui contient les attributs et les types suivants :
- type : string
- color : string
- age : int
- areas : array

Importez cette classe dans votre fichier index.php et dans une variable $bird stockez une instance de la classe Bird. Donnez aux attributs, dans l'ordre, les valeurs suivantes :
- "sparrow"
- "grey"
- 5
- "europe", "north america", "asia"

Faites un var_dump de $bird. Le résultat obtenu est-il celui attendu ?

Dans la réalité un oiseau peut faire beaucoup de choses, comme par exemple chanter. Peut-on donc dire qu'en l'état notre classe est représentative d'un oiseau ?

A la suite des attributs, dans la classe, ajoutez le code suivant :
```
public function sing() {
  echo "<br>$this->type : Cui cui<br>";
}
```
Que venons nous de rajouter à la classe Bird ? Qu'elle est l'unique différence avec une fonction classique ?

Dans votre fichier index.php appelez la méthode sing sur l'instance de la classe Bird contenue dans $bird et faites chantez votre oiseau. Que voyez-vous apparaître à l'écran ?

Selon vous à quoi correspond le mot clef $this employé dans la méthode ? Peut-il être employé autrement que dans la méthode d'un objet ?

Vous allez maintenant intégrer une méthode fly à votre classe bird. Cette méthode représente le déplacement de votre oiseau par voie aérienne jusqu'à une destination donnée. Elle attend donc un argument de type string représentant la destination. Elle retourne une string :
- si l'âge de l'oiseau est supérieur à 4, elle retourne "The bird is flying to (la destination passée en argument)"
- sinon elle retourne "This bird is too young to fly"

Appelez la méthode fly sur $bird avec pour destination Paris et faites varier la valeur de l'attribut age afin de vous assurer que la méthode est fonctionnelle.

## 2\.Exercice 2
Créez sur un fichier otherBird.php une classe OtherBird qui est une copie de la classe Bird précédente afin d'éviter les conflits. Chargez là dans votre index.php à l'exercice 2. Modifiez votre classe OtherBird et ajoutez lui la méthode suivante :
```
public function __construct() {
  echo "<br>The object has been instantiated<br>";
}
```
Quelle particularité remarquez-vous dans la notation de cette méthode ?

Déclarez une variable $otherBird et assignez lui une instance de la classe OtherBird.
Que voyez-vous s'afficher à l'écran ? Avez-vous appelé une quelconque méthode ?
Qu'en déduisez-vous de la méthode construct ? Selon vous à quel moment du cycle de vie de l'objet est-elle appelée ?

Selon-vous existe-t-il des opérations récurrentes, que vous faites quasiment après chaque instanciation d'un objet et que vous pourriez automatiser grâce au constructeur ?

Modifiez votre constructeur de la manière suivante :
```
public function __construct($type) {
  $this->type = $type;
}
```
Modifiez l'instanciation de votre objet de la manière suivante :
```
$otherBird = new OtherBird("sparrow");
```
Faites un var_dump de $otherBird. Que remarquez-vous ?
Que s'est-il passé pour l'attribut type ?
Pourquoi est-il nécessaire d'utiliser $this ?
Dans le constructeur qu'elle est la différence entre type et $type ? Pourquoi les deux sont-ils nécessaires ?

Faites de même pour les autres attributs de la classe OtherBird et passez leur une valeur lors de l'instanciation de l'objet.

Quel est l'intérêt de cette méthode comparée à celle utilisée dans l'exercice 1 pour donner une valeur aux attributs ?

Pour aller plus loin, voici une variable :
```
$data = [
  "type" => "sparrow",
  "color" => "white",
  "age" => 2,
  "areas" => ["europe", "north america", "asia"],
];
```
Que contient-elle et que représente-t-elle ?

Vous allez faire en sorte de passer les valeurs du tableau dans les attributs de l'objet. Pour cela votre constructeur n'attendra plus qu'un seul argument de type tableau. Vous devrez également allez chercher pour chaque attribut la valeur au bon index.

Le résultat est exactement le même que précédemment mais quel est l'intérêt de travailler avec un tableau associatif et non une multitude de variables selon vous ?
