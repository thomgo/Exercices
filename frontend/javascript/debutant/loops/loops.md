## 1\.Exercice 1
Selon vous, qu'est ce qui s'affiche à l'écran avec le programme suivant ?

```
var i = 0;
while (i <= 9) {
  console.log("One run of the loop");
  i ++;
}
```
Combien de fois la phrase est-elle affichée ? Pourquoi ? Est-ce le bon nombre de répétition de la boucle ?

Remplacez "i ++" par "i += 2". Que se passe-t-il ? Pourquoi ?

Que se passe-t-il si on supprime "i ++" ? Pourquoi ? Comment s'appelle ce type de boucle ? **Ne le faites pas, cela ferait buguer votre machine**.

## 2\.Exercice 2
Selon vous, qu'est ce qui s'affiche à l'écran avec le programme suivant ?

```
for (var i=0; i <=9 ; i++) {
  console.log("One run of the loop");
}
```
Combien de fois la phrase est-elle affichée ? Pourquoi ? Est-ce le bon nombre de répétition de la boucle ?

Remplacez "i ++" par "i += 2". Que se passe-t-il ? Pourquoi ?

Que se passe-t-il si on supprime "i ++" ?

Le fonctionnement et le résultat de cette boucle sont-ils différents de ceux de la boucle while à l'exercice précédent ?

D'après vos expérimentations, quels sont selon-vous les avantages et les inconvénients des deux boucles ?

## 3\.Exercice 3
Ecrivez une structure de type boucle qui permet d'afficher les nombres de 0 à 100 avec un retour à la ligne.
Résultat attendu :
```
0
1
2
3
...
100
```
Modifiez maintenant votre boucle afin qu'elle n'affiche que les nombres de 1 à 99.
Modifiez maintenant votre boucle afin qu'elle n'affiche que les nombres pairs de 0 à 100.

## 4\.Exercice 4
Ecrivez une structure de type boucle qui permet d'afficher les nombres de 0 à 100 avec à côté de chaque nombre sa nature : pair ou impair.
Résultat attendu :
```
0 is even
1 is odd
2 is even
3 is odd
...
100 is even
```

## 5\.Exercice 5
Déclarez une variable items et assignez lui un tableau contenant les éléments suivants : "First item", "Second item", "Third item", "Fourth item".

A la suite, ajoutez la boucle suivante :
```
for (var i=0; i < 4; i++) {
  console.log(items[i]);
}
```

Qu'est ce qui s'affiche à l'écran ? Pourquoi ?
A quoi correspond i dans la boucle for ? A quoi correspond i dans le tableau items ?
En conséquence que permet de faire ce modèle de boucle associé à un tableau ?

Que se passe-t-il si on remplace "i < 4" par "i < 5" ? Quelle sera la dernière valeur de i ? Cela correspond-t-il à quelque chose dans le tableau ?

## 6\.Exercice 6
Le code suivant est censé afficher la liste des clients présents sur notre site. Cependant il ne fonctionne pas. Serez-vous capable de le débuguer ?

```
customers = [
  "Albin Term",
  "Anna Sandgrove",
  "John Doe";
  "Terrance Head",
  "Yan Mock",
  "Zoe Durst"
];
console.log("List of all customers : <br>";
for (i=1, i < 4, i++) {
  console.log(customers . "<br>";
```

## 7\.Exercice 7
Déclarez une variable items et assignez lui un tableau contenant les éléments suivants : "First item", "Second item", "Third item", "Fourth item".

Utilisez une boucle for/of pour parcourir le tableau et afficher tous les éléments.
En l'état a-t-on accès aux indexes ?

Selon vous quels sont donc les avantages et inconvénients de la boucle for et for/of ?

## 8\.Exercice 8
Déclarez une variable citizen et assignez lui un tableau associatif. Le tableau contient les indexes et valeurs suivantes :
- "firstname" : "John"
- "lastname" : "Doe"
- "age" : 45
- "income" : 60000

Affichez maintenant à l'écran la carte d'identité de cette personne. C'est à dire l'ensemble des clefs et valeurs qui leur sont associées. Résultat attendu :
```
Citizen identity :
firstname : John
lastname : Doe
age : 45
income : 60000
```
Rajoutez maintenant une paire index/valeur à votre tableau citizen :
- "sexe" : 0
Le sexe est représenté par un boolean. Si sexe vaut 1 alors la personne est une femme, s'il vaut 0 alors la personne est un homme.

Rajoutez dans la carte d'identité l'affichage du sexe du citoyen. Cependant vous n'affichez pas un boolean, vous affichez "male" ou "female" selon la valeur stockée.

Astuce : vous devrez utiliser plusieurs conditions dans votre boucle.  

## 9\.Exercice 9
Voici une variable citizens qui contient un tableau de tableaux :
```
var citizens = [
  {
    "firstname" : "John",
    "lastname" : "Doe"
  },
  {
    "firstname" : "Anna",
    "lastname" : "Molner"
  },
  {
    "firstname" : "Harry",
    "lastname" : "Trueman"
  },
  {
    "firstname" : "Cecile",
    "lastname" : "Mercier"
  }
];
```
Pouvez-vous affichez tous les citoyens ? résultat attendu :
```
Citizen :
firstname : John
lastname : Doe

Citizen :
firstname : Anna
lastname : Molner

etc...
```
Astuce : vous aurez besoin d'une boucle dans une boucle. N'oubliez pas que pour vous aider vous pouvez faire des console.log de votre code pendant que vous le construisez.
