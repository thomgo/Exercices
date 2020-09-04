**NB : Pour tous les exercices vous travaillerez avec une page php sur votre serveur qui vous servira à afficher les résultats obtenus.**

## 1\.Exercice 1
Déclarez une fonction ayant pour nom product, cette fonction n'attend aucun argument. Cette fonction, pour l'instant réalise une seule action, elle affiche à l'écran le texte suivant "I am the product function".

En l'état, est ce que quelque chose s'affiche à l'écran ? Pourquoi ?
Quelles sont les deux étapes de la vie d'une fonction ?

Appelez maintenant la fonction product et vérifiez qu'elle affiche bien le résultat voulu.

En l'état cette fonction a-t-elle un quelconque intérêt ? Pourquoi ?

D'après le nom de votre fonction, que serait-elle censée faire selon vous ? Est ce cohérent avec le code qu'elle exécute actuellement ?

Modifiez le code exécuté par la fonction product. La fonction affiche maintenant le résultat de l'opération 4*30.

Qu'est ce qui s'affiche à l'écran ? Le code exécuté par la fonction est-il cohérent avec son nom maintenant ?

Quel est le problème de notre fonction en l'état ?

Vous allez modifier la déclaration de votre fonction et dire qu'elle attend maintenant deux arguments $a et $b. Vous ne modifiez pas le code exécuté. Que se passe-t-il à l'écran ? Quelle est l'erreur que vous constatez ?

Lors de l'appel de la fonction, passez lui maintenant deux valeurs 8 et 3. Que se passe-t-il ? Le résultat affiché est-il celui du produit de 8 par 3 ? Pourquoi ?

Quelle la relation entre les arguments $a et $b et les valeur 8 et 3 ?

Dans le code exécuté par la fonction, remplacez maintenant 4*30 par $a*$b.

Qu'est ce qui s'affiche à l'écran ? Est ce que cohérent avec les valeurs passées à la fonction ?

Lors de l'appel de la fonction remplacez maintenant 8 et 3 par 4 et 30. Vous devez normalement retrouvez votre résultat initial.

Selon-vous quel est encore, à l'heure actuelle le problème de votre fonction ? Que se passerait-il si par exemple vous vouliez utiliser ce résultat dans différentes chaînes de carcatères à travers une application ? Cela serait-il possible ? Pourquoi ?

Modifiez le code exécuté par la fonction, dorénavant elle ne fera plus un echo mais un return du résultat.

Qu'est ce qui s'affiche maintenant à l'écran ? Pourquoi ?

Lors de l'appel de la fonction stockez maintenant la valeur de retour dans une variable $result et affichez cette valeur à l'écran avec une chaîne de caractères du type : "The result of the function is : $result".

Il reste encore un problème avec la fonction. Celle-ci est fonctionnel mais la qualité et la maintenabilité du code n'est pas optimale. Selon-vous de quoi s'agit-il ?

Dans la déclaration de la fonction, remplacez maintenant ($a, $a) par (int $a, int $b). Que venez vous d'indiquer au programme ? Que se passera-t-il si par exemple vous passez une chaîne de caractères en argument lors de l'appel de la fonction ? Quel est l'intérêt pour un programmeur ?

A la suite de (int $a, int $b), rajoutez : int. Que venez vous d'indiquer au programme ? Quel est l'intérêt pour un programmeur ?

## 2\.Exercice 2
Créez une fonction  nommée showDigits. Cette se contente d'afficher à l'écran les chiffres de 0 à 9.

Affichez les chiffres à l'aide la fonction que vous avez créée.

## 3\.Exercice 3
Créez une fonction welcome qui attend les arguments $firstname et $lastname. Pour un prénom et un nom donnés cette fonction affiche à l'écran un message de bienvenue avec ce nom et ce prénom.

Pour John Doe, elle peut afficher par exemple : "Welcome to our site John Doe".

Testez votre fonction avec différents noms et prénoms.

Si l'on remplace $firstname par $firstname="John" et $lastname par $lastname="Doe", quelles sont les conséquence sur la fonctionnement de la fonction welcome ?

## 4\.Exercice 4
Créez une fonction isAdult, sur la base d'un âge donné, cette fonction vérifie si la personne est adulte ou non. On considère comme adulte toute personne de 18 ans ou plus.

La fonction retourne true si la personne est adulte, false le cas contraire. Attention la fonction renvoie false même si aucun âge n'est donné.

Astuce : cela veut dire que même si aucun âge n'est donné, l'argument représentant l'âge doit avoir une valeur par défaut.

Utilisez cette fonction avec les âges de votre choix et affichez le message "Welcome to the site" si l'âge donné correspond à un adulte.

Faites maintenant en sorte que la fonction ne puisse prendre qu'un integer en argument et ne renvoyer qu'un boolean.

Selon vous, pourquoi a-t-on décidé que cette fonction renverrait true si la personne est adulte et non l'inverse c'est à dire false ? Le code aurait pourtant été fonctionnel.

## 5\.Exercice 5
Créez une fonction birthYear. Cette fonction sur la base d'un âge donné calcule l'année de naissance de la personne à partir de l'année actuelle.

Si aucun âge n'est passé à la fonction, celle-ci renvoie simplement le message "No age given".

Astuce : pour obtenir l'année actuelle en PHP, vous pouvez utiliser la fonction native suivante (https://www.php.net/manual/fr/function.date.php), il faudra simplement lui passer le bon paramètre.

Affichez à l'écran le retour de la fonction sans paramètre âge et pour différents âges passés.

## 6\.Exercice 6
Déclarez une variable $user et assignez lui pour valeur un tableau associatif avec les index et valeurs suivants :
- "firstname" "John"
- "lastname" "Doe"
- "age" 42
- "job" "dev"

Déclarez une fonction identityCard, elle attend un argument qui est un tableau associatif représentant un utilisateur du site.

Elle retourne une seule chaîne de caractère contenant toutes les paires index/valeur du tableau.

Appelez votre fonction identityCard et passez la variable $user en argument.

Résultat attendu :
```
firstname : John
lastname : Doe
age : 42
job : dev
```
Améliorez encore un peu votre fonction en indiquant spécifiquement que l'argument attendu doit être de type tableau et la valeur retournée de type chaîne de caractères.

Quel est l'intérêt de spécifier ces informations lors de la création de la fonction ?
