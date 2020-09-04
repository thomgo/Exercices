**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus.**

## 1\.Exercice 1
Appelez la fonction rand de PHP de la manière suivante :
```
rand();
```
Est-ce qu'il se passe quelque chose à l'écran ? Est ce normal ? Pourquoi ?

D'après la documentation officielle (https://www.php.net/manual/fr/function.rand.php) à quoi sert cette fonction ? Selon-vous quels pourraient être les cas d'usage d'une telle fonction ?

Stockez la valeur de retour de la fonction dans une variable et affichez cette valeur à l'écran. Actualisez votre page plusieurs fois pour constater que le code fonctionne.

A la suite, appelez à nouveau la fonction rand() mais passez lui cette fois les arguments 0 et 10. Réassignez la valeur de votre variable à la valeur de retour de la fonction et affichez cette valeur à l'écran. Actualisez votre page plusieurs fois.

Que constatez-vous ? A quoi servent les arguments que vous avez passés ?

Que se passe-t-il si vous remplacez 10 par "test" ? Que vous dit le message d'erreur ? Est-ce normal par rapport à ce qui est écrit dans la documentation ?

## 2\.Exercice 2
Déclarez une variable $number et assignez lui pour valeur 12.8.
Affichez le contenu de cette variable à l'écran. Quel est le type des données affichées ?

Utilisez la fonction suivante (https://www.php.net/manual/fr/function.round.php) pour arrondir $number. Stockez la valeur de retour de la fonction dans une variable et affichez la à l'écran.

Modifiez la valeur de $number à 12.3.
Modifiez la valeur de $number à 12.5

Qu'en déduisez-vous sur la manière  dans les nombres sont arrondis ?

Combien d'arguments peut normalement attendre cette fonction ? Combien en avez-vous passé ? Pourquoi cela fonctionne-t-il quand même ?

Modifiez maintenant la valeur de $number à 12.42359.
Utilisez la fonction round pour arrondir cette valeur et l'affichez à l'écran ? A-t-on conservé des décimales ?

Seriez vous capable de modifier un des paramètres de la fonction pour conserver un nombre arrondi à deux décimales ?

## 3\.Exercice 3
Un utilisateur de notre site nous a indiqué son âge à l'aide d'un formulaire. Le problème est que nous avons reçu son âge sous forme de chaîne de caractères, or nous avons besoin d'un integer.

Déclarez une variable $age et assignez lui pour valeur "35".
Faites un var_dump de la variable.
Vous constatez qu'elle est de quel type ?

Trouvez une fonction native de PHP qui permet de convertir un nombre sous forme de chaîne de caractères en integer. Stockez la valeur de retour de la fonction dans la variable $age et refaites un var_dump de la variable afin de vous assurez que son type a été modifié.

## 4\.Exercice 4
Déclarez une variable $texte et assignez lui pour valeur une chaîne de caractères de votre choix. Déclarez une variable $maxLength et assignez lui pour valeur 20.

Affichez à l'écran la taille de la chaîne de caractères contenue dans $texte à l'aide de la fonction suivante (https://www.php.net/manual/fr/function.strlen.php).

Le résultat affiché correspond-t-il à la taille de votre texte ?

A l'aide de cette fonction et d'un bloc conditionnel, écrivez maintenant un programme qui affiche :
- "Your texte is too long" si la longueur de $texte et supérieure à $maxLength
- "OK" si la longueur de $texte est inférieur ou égale à $maxLength

## 5\.Exercice 5
Déclarez une variable $texte et assignez lui pour valeur la chaîne de caractères "A nice boat".
Faites un var_dump de la variable.

Quel est son type ?

Vous voulez maintenant la convertir en un tableau de lettres, chaque caractère représentant une valeur du tableau. Réalisez cette opération à l'aide de la fonction suivante (https://www.php.net/manual/fr/function.str-split.php)

Assurez vous à l'aide d'un var_dump que la chaîne de caractères est bien devenue un tableau.

D'après la documentation, que se passera-t-il si vous ajoutez l'argument 3 après l'argument $texte à la fonction ? A quoi sert ce paramètre ?

Vous voulez maintenant convertir la chaîne de caractères originale en tableau mais vous souhaitez que chaque mot constituant la chaîne corresponde à une valeur du tableau. Autrement-dit, vous ne voulez pas un tableau de lettre mais un tableau de mots.

Réalisez cette opération à l'aide de la fonction suivante (https://www.php.net/manual/fr/function.explode.php). Faites un var_dump pour vous assurez que le résultat obtenu est le bon.

Astuces :
- Cette fonction attend forcément deux arguments
- En français par quoi sont séparés chaque mot d'une phrase ?
- Attention à l'ordre des arguments

## 6\.Exercice 6
Le code ci-dessous vérifie normalement que le nom rentré par un utilisateur est celui attendu et affiche un message de bienvenue. Le problème est que notre utilisateur a rentré le bon nom, son nom a lui selon les règles orthographiques en vigueur mais notre programme ne le reconnaît pas. Pourquoi cela ?

Serez-vous capable d'utiliser la fonction suivante (https://www.php.net/manual/fr/function.strtolower.php) pour modifier le programme afin qu'il reconnaisse le nom rentré par Paul. **Attention vous ne pouvez pas modifier directement le contenu des variables $name ou $expectedName**

```
$name = "Paul Dumas";
$expectedName = "paul dumas";

if ($name === $expectedName) {
  echo "OK Paul you can come in";
}
else {
  echo "We do not know you";
}
```
Selon-vous quel est l'usage concret de cette fonction sur un site web ? Dans quels cas de figure peut-elle être utile ?

Serez vous capable de trouver dans la documentation la fonction jumelle qui réalise l'opération inverse ?

## 7\.Exercice 7
Déclarez une variable $newStudent et assignez-lui pour valeur "Ryan Oper". Déclarez une variables $students et assignez lui pour valeur un tableau avec les chaînes de caractères suivantes : "John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner".

Faites un var_dump des deux variables et vérifiez qu'elles ont bien le type et le contenu attendu.

Un nouvel étudiant est arrivé en cours d'année et il faut donc l'ajouter à la liste des étudiants de la classe. Utilisez la fonction array_push (https://www.php.net/manual/fr/function.array-push.php) pour ajouter la valeur de $newStudent à la fin de $students.

Faites un var_dump de $students pour vous assurer que la valeur a bien été ajoutée.

Il existe une notation raccourcie permettant de faire exactement le même chose que la fonction array_push mais sans utiliser de fonction. Qu'elle est cette notation ?

Quels sont selon-vous les intérêts des deux notations ?

A la suite, utilisez à nouveau la fonction array_push pour ajouter deux nouveaux éléments en une seule fois au tableau $students : "Franck Martin", "Tom Hawkins".

Vérifiez le contenu du tableau avec un var_dump.

## 8\.Exercice 8
Déclarez une variable $transactions et assignez lui pour valeur un tableau contenant les integers suivants qui représentent des montants de transactions enregistrés sur un compte : 102, 50, 4563, 42, 78, 146, 10563.

Déclarez une variable $researched et assignez lui pour valeur 42. Elle représente le montant d'une transaction recherchée par un inspecteur des finances.

Faites un var_dump de in_array($researched, $transactions). Qu'elle est la valeur renvoyée ? Quelle est la valeur renvoyée si vous remplacez $researched par 44 ?

Sur la base de ces constations et de la documentation (https://www.php.net/manual/fr/function.in-array.php) que fait la fonction in_array selon vous ? Quel est le type de valeur renvoyé ?

Utilisez une structure conditionnelle et la fonction in_array pour produire un code qui :
- Si la valeur de $researched se trouve dans le tableau $transactions affiche "We found a matching transaction"
- Si la valeur de $researched ne se trouve pas dans le tableau $transactions affiche "No match"


## 9\.Exercice 9
Reprenez la variable $students de l'exercice 7. Faites un var_dump de cette variable.

Les étudiants sont-ils stockés dans l'ordre alphabétique ?

Avant de transmettre la liste des étudiants au secrétariat ceux-ci doivent être présentés dans l'ordre alphabétique pour simplifier les traitements. Utilisez la fonction sort (https://www.php.net/manual/fr/function.sort.php) pour réaliser cette opération.

Quelle est la particularité de cette fonction comparée à celles utilisées précédemment ?

Affichez maintenant le dernier élément du tableau $students peu importe la taille de ce dernier. Vous disposez de plusieurs solutions pour cela :
- Utiliser la fonction count()
- Utilisez la fonction end()
- Utilisez la fonction array_pop()
