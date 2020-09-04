## 1\.Exercice 1
Appelez la méthode random de l'objet Math de la manière suivante :
```
Math.random();
```
Est-ce qu'il se passe quelque chose à l'écran ? Est ce normal ? Pourquoi ?

D'après la documentation officielle (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Math/random) à quoi sert cette fonction ? Selon-vous quels pourraient être les cas d'usage d'une telle fonction ?

Stockez la valeur de retour de la fonction dans une variable et affichez cette valeur à l'écran. Exécutez votre code plusieurs fois pour constater que le code fonctionne.

## 2\.Exercice 2
Déclarez une variable number et assignez lui pour valeur 12.8.
Affichez le contenu de cette variable à l'écran. Quel est le type des données affichées ?

Utilisez la fonction suivante (https://www.JavaScript.net/manual/fr/function.round.JavaScript) pour arrondir number. Stockez la valeur de retour de la fonction dans une variable et affichez la à l'écran.

Modifiez la valeur de number à 12.3.
Modifiez la valeur de number à 12.5

Qu'en déduisez-vous sur la manière  dans les nombres sont arrondis ?

Modifiez maintenant la valeur de number à 12.42359.
Utilisez la fonction round pour arrondir cette valeur et l'affichez à l'écran ? A-t-on conservé des décimales ?

Seriez-vous capable d'arrondir ce nombre mais en conservant deux décimales après la virgule ? Pour vous aider : https://stackoverflow.com/questions/11832914/round-to-at-most-2-decimal-places-only-if-necessary

## 3\.Exercice 3
Un utilisateur de notre site nous a indiqué son âge à l'aide d'un formulaire. Le problème est que nous avons reçu son âge sous forme de chaîne de caractères, or nous avons besoin d'un integer.

Déclarez une variable age et assignez lui pour valeur "35".
Faites un console.log d'un typeof de la variable.
Vous constatez qu'elle est de quel type ?

Trouvez une fonction native de JavaScript qui permet de convertir un nombre sous forme de chaîne de caractères en number. Stockez la valeur de retour de la fonction dans la variable age et refaites un console.log du type de la variable afin de vous assurez que son type a été modifié.

## 4\.Exercice 4
Déclarez une variable texte et assignez lui pour valeur une chaîne de caractères de votre choix. Déclarez une variable maxLength et assignez lui pour valeur 20.

Affichez à l'écran la taille de la chaîne de caractères contenue dans texte à l'aide de la fonction suivante (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/length).

Le résultat affiché correspond-t-il à la taille de votre texte ?

A l'aide de cette fonction et d'un bloc conditionnel, écrivez maintenant un programme qui affiche :
- "Your texte is too long" si la longueur de texte et supérieure à maxLength
- "OK" si la longueur de texte est inférieur ou égale à maxLength

## 5\.Exercice 5
Déclarez une variable texte et assignez lui pour valeur la chaîne de caractères "A nice boat".
Faites un console.log du type de la variable.

Quel est son type ?

Vous voulez maintenant la convertir en un tableau de lettres, chaque caractère représentant une valeur du tableau. Réalisez cette opération à l'aide de la fonction suivante (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/split)

Assurez vous à l'aide d'un console.log que la chaîne de caractères est bien devenue un tableau.

D'après la documentation, que se passera-t-il si vous ajoutez l'argument 3 après le délimitateur de la fonction ? A quoi sert ce paramètre ?

Vous voulez maintenant convertir la chaîne de caractères originale en tableau mais vous souhaitez que chaque mot constituant la chaîne corresponde à une entrée du tableau. Autrement-dit, vous ne voulez pas un tableau de lettre mais un tableau de mots.

Vous utiliserz à nouveau la fonction split mais vous devrez utiliser un autre délimitateur. Faites un console.log pour vous assurez que le résultat obtenu est le bon.

Astuces :
- Qu'est ce que qui sépare tous les mots d'une phrase dans les langues européennes ?

## 6\.Exercice 6
Le code ci-dessous vérifie normalement que le nom rentré par un utilisateur est celui attendu et affiche un message de bienvenue. Le problème est que notre utilisateur a rentré le bon nom, son nom a lui selon les règles orthographiques en vigueur mais notre programme ne le reconnaît pas. Pourquoi cela ?

Serez-vous capable d'utiliser la fonction suivante (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/toLowerCase) pour modifier le programme afin qu'il reconnaisse le nom rentré par Paul. **Attention vous ne pouvez pas modifier directement le contenu des variables name ou expectedName**

```
var name = "Paul Dumas";
var expectedName = "paul dumas";

if (name === expectedName) {
  console.log("OK Paul you can come in");
}
else {
  console.log("We do not know you");
}
```
Selon-vous quel est l'usage concret de cette fonction sur un site web ? Dans quels cas de figure peut-elle être utile ?

Serez vous capable de trouver dans la documentation la fonction jumelle qui réalise l'opération inverse ?

## 7\.Exercice 7
Déclarez une variable newStudent et assignez-lui pour valeur "Ryan Oper". Déclarez une variables students et assignez lui pour valeur un tableau avec les chaînes de caractères suivantes : "John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner".

Faites un console.log des deux variables et vérifiez qu'elles ont bien le type et le contenu attendu.

Un nouvel étudiant est arrivé en cours d'année et il faut donc l'ajouter à la liste des étudiants de la classe. Utilisez la fonction push (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/push) pour ajouter la valeur de newStudent à la fin de students.

Faites un console.log de students pour vous assurer que la valeur a bien été ajoutée.

A la suite, utilisez à nouveau la fonction array_push pour ajouter deux nouveaux éléments en une seule fois au tableau students : "Franck Martin", "Tom Hawkins".

Vérifiez le contenu du tableau avec un console.log.

## 8\.Exercice 8
Déclarez une variable transactions et assignez lui pour valeur un tableau contenant les valeurs suivantes qui représentent des montants de transactions enregistrés sur un compte : 102, 50, 4563, 42, 78, 146, 10563.

Déclarez une variable researched et assignez lui pour valeur 42. Elle représente le montant d'une transaction recherchée par un inspecteur des finances.

Faites un console.log de : transactions.includes(researched). Qu'elle est la valeur renvoyée ? Quelle est la valeur renvoyée si vous remplacez researched par 44 ?

Sur la base de ces constations et de la documentation (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/includes) que fait la fonction includes selon vous ? Quel est le type de valeur renvoyée ?

Utilisez une structure conditionnelle et la fonction includes pour produire un code qui :
- Si la valeur de researched se trouve dans le tableau transactions affiche "We found a matching transaction"
- Si la valeur de researched ne se trouve pas dans le tableau transactions affiche "No match"


## 9\.Exercice 9
Reprenez la variable students de l'exercice 7. Faites un console.log de cette variable.

Les étudiants sont-ils stockés dans l'ordre alphabétique ?

Avant de transmettre la liste des étudiants au secrétariat ceux-ci doivent être présentés dans l'ordre alphabétique pour simplifier les traitements. Utilisez la fonction sort (https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/sort) pour réaliser cette opération.

Affichez maintenant le dernier élément du tableau students peu importe la taille de ce dernier. Au besoin faites une recherche sur internet.
