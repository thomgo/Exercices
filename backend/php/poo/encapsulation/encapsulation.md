**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus et une ou plusieurs autres pages qui serviront à stocker les classes créées.**

## 1\.Exercice 1
Dans un fichier student.php intégrez la classe suivante :
```
class Student
{
  public string $name;
  public int $age;
}

```
Chargez cette classe dans votre fichier index.php et instanciez un objet Student vide que vous stockerez dans une variable $student.

Assignez les valeurs suivantes aux attributs de l'objet créé :
- name : "Timmy"
- age : 35
Faites un var_dump de l'objet pour vérifier que les valeurs ont bien été passées aux attributs.

Dans votre classe Student modifiez le mot clef public en protected.

Que se passe-t-il à l'écran ? Que vous dit le message de l'erreur généré ? Que pouvez-vous en déduire sur l'effet du statut protected sur un attribut ?

Dans votre classe, à la suite, ajoutez maintenant la méthode suivante, attention elle est incomplète, ce sera à vous de la finir.
```
public function setName() {
  $this-> = ;
}
```
Selon vous, à quoi va servir cette méthode ? Que lui manque-t-il pour fonctionner correctement et remplir son objectif ?

Modifiez la méthode setName afin qu'elle attende un argument de type string représentant le nom à donner à notre objet de classe Student. Assignez la valeur de cet argument à l'attribut comme vous aviez pu le faire dans les exercices précédents.

Dans votre fichier index.php utilisez maintenant la méthode setName de $student pour lui donner un nom.

Avez-vous une erreur ? Pourquoi ? Quelle est la différence entre cette manière d'accéder à l'attribut et la précédente ?

De la même manière, créez une deuxième méthode appelée setAge et utilisez la pour donner un âge à votre étudiant.

## 2\.Exercice 2
Instanciez un nouvel objet Student dans la variable $student.
Assignez les valeurs suivantes aux attributs de l'objet créé à l'aide des setters :
- name : "a"
- age : 1250

Faites un var_dump de l'objet afin de vous assurer de son contenu.

Est ce qu'il y a un problème avec ces valeurs d'un point de vue informatique ? Est ce qu'il y a un problème d'un point de vue réaliste ?

Il faudrait effectuer une vérification autre que celle du type sur les valeurs passées aux attributs. Quels serait selon-vous l'endroit idéal pour réaliser une telle vérification ?

En PHP que peut-on déclencher ou "lancer" si les choses ne se passent pas comme prévu (par exemple si une valeur n'est pas celle attendue) ?

Vous allez modifiez vos deux setters de la manière suivante :
- si la valeur passée en argument est valide alors on la stocke dans l'attribut
- si ce n'est pas le cas on déclenche une exception avec un message court expliquant le problème.

Pour le nom, on considère qu'il doit faire au moins deux caractères. Pour il doit être compris entre 16 et 70 ans.

Est ce que quelque chose s'affiche sur votre page ? Pourquoi ? Comment résoudre le problème ?

Vous allez attraper les exceptions au sein de votre code. Vous allez intégrer l'appel à vos setters au sein d'un bloc try/catch (https://www.php.net/manual/en/language.exceptions.php). Voici un morceau de code pour vous aider.
```
try {
  // Appel à vos setters
}
catch (\Exception $e) {
  // Affichage du message
}
```
Faites varier les valeurs passées aux setters afin de vérifier le déclenchement et l'affichage des exceptions.

## 3\.Exercice 3
Dans un fichier book.php déclarez une classe Book qui contient les attributs suivants et les setters associés :
- title : une string
- pages : un integer représentant le nombre de page du livre

Il n'y aura pas de vérification dans les setters afin d'alléger le code. Ils se  contentent d'assigner une valeur aux attributs.

Dans votre fichier index.php instaciez un objet Book et stockez le dans une variable $book. A l'aide des setters donnez lui pour titre The rain et pour nombre de pages 246.

En appelant les setters à l'extérieur de la classe comme vous l'avez fait quel serait le problème s'il y avait de nombreux attributs ? D'après les exercices précédents quelle est la solution ?

Vous allez donc créer un constructeur pour votre classe qui attendra un tableau associatif en argument et appellera les setters de l'objet. Le tableau vous est donné :
```
$data = [
  "title" => "The rain",
  "pages" => 246,
];
```
Modifiez l'instanciation de votre objet en lui passant le tableau en paramètre.

A la suite, intégrez maintenant le code suivant :
```
echo "<br>" . $book->title . " has " . $book->pages . " pages";
```
Que devrait-il normalement afficher ? Qu'est ce que vous obtenez ? Pourquoi ?

Comme pour donner une valeur à un attribut protéger, pour obtenir la valeur d'un attribut protégé, vous allez devoir créer une méthode. Dans votre classe Book, sous setTitle rajoutez la méthode suivante :

```
public function getTitle():string {
  return ;
}
```
Celle-ci doit retourner le titre du livre, à vous de la compléter. Créez une méthode similaire pour les pages.

Modifiez maintenant la ligne avec le echo pour la rendre fonctionnelle.
