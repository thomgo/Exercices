## 1\.Exercice 1 : Problème de chaussures
*notions : variables, évaluations, pourcentage*

Marc fait un peu de shopping. Il achète des chaussures à 70€, un jean à 59€ et un t-shirt à 20€.

Heureusement pour son portefeuille, il bénéficie d'une réduction de 20%.

Déclarez chacun des articles achetés et la réduction dans une variable différente. Faites en sorte que le nom de la variable soit cohérent avec la valeur stockée.

Déclarez une dernière variable 'total' qui aura pour valeur la somme des achats à laquelle on aura appliqué la réduction et l'afficher sur une page web.

Combien Marc paie-t-il au final ?

## 2\.Exercice 2 : Quels sont les multiples de 3 ?
*notions : boucles, évaluations, conditions*

Créez une boucle itérant de 1 à 100, et n'affichez sur une page web que les nombre impairs qui sont des multiples de 3 avec un retour à la ligne à chaque fois.

Résultat attendu :

```
3
9
15
21
...
```


## 3\.Exercice 3 : Le profil est-il bien rempli ?
*notions : tableau, boucle, conditions, (fonctions natives)*

Un utilisateur a rempli un formulaire avec les informations de son profil sur notre site. Nous avons récupéré un tableau avec ses informations. Le problème est que l'utilisateur a laissé certains champs vides en remplissant le formulaire, nous avons donc reçu des chaînes de caractères vides.

Voici le tableau avec lequel vous travaillerez
```
$user = [
  "lastname" => "Doe",
  "firstname" => "John",
  "nickname" => "",
  "age" => "42",
  "hobby" => "",
  "sport" => ""
];
```
Vous allez faire en sorte de remplacer toutes les chaînes de caractères **vides** par la phrase suivante "No information provided".

Assurez-vous que les chaînes de caractères aient bien été remplacées à l'aide d'un var_dump.

## 4\.Exercice 4 : Nettoyage de chaînes
*notions : string, fonctions natives*

Du texte est stocké dans une variable. Le problème est que le texte en question a été écrit par quelqu'un qui a l'affreuse manie de confondre 0 le chiffre et o la lettre.

Trouvez une fonction PHP qui vous permet de remplacer tous les zéro par des o et nettoyez la chaîne de caractères ci-dessous.

```
$texte = "B0nj0ur les n0uveau, démarr0ns la pr0grammati0n";
```

## 5\.Exercice 5 : Décaler son texte
*notions : string, fonctions, concaténation, (conditions)*

Afin de mettre en forme des factures, vous avez besoin d'une fonction qui permet que décaler un texte à l'aide de tirets.

Vous produisez donc une fonction qui attend deux arguments, le texte à décaler et le nombre de tirets à ajouter devant ce texte. Attention vous vous assurez que les arguments passés et la valeur retournée soient du bon type.

Exemple d'usage :
```
addDash("test", 10)

// Retourne
----------test
```

Si vous souhaitez aller plus loin, faites en sorte que la fonction alterne entre tiret et astérisque, elle produire alors le résultat suivant :
```
*-*-*-*-*-test
```
