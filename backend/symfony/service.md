# Créer un service

Votre blog avance plutôt bien mais dès qu’il va grossir vous allez commencer à devoir réemployer des fonctions sur différentes pages pour réaliser plusieurs fois les mêmes actions, bref vous allez dupliquer du code ce qui n’est pas bien.

Pour remédier à ce problème nous allons créer un service, c'est à dire une classe utilitaire qui peut être utilisée sur notre site (mais principalement dans les contrôleurs) afin de réaliser une ou des actions précise.

Créons un service qui vérifie qu’il n’y ait pas d’insultes dans le contenu de nos articles (oui notre blog sera tous publics).

Concrètement vous allez créer un service (donc une classe) avec une méthode qui vérifie la présence d’insultes dans le contenu d’un article et les remplace par des dièses si elle en trouve.

Quelques indications :
- La méthode attend un objet article en paramètre
- La méthode renvoie l'objet article avec le contenu texte nettoyé
- Pour trouver les insultes elle se base sur un tableau listant quelques insultes

Vous utiliserez ce service dans le contrôleur de la route single avant l’affichage du contenu de l’article.

Typiquement dans le contrôleur, vous devez pouvoir écrire quelque chose comme ceci :
```
$article = $swearCleaner->cleanSwear($article);
```

Pour vous aider :
- https://symfony.com/doc/current/service_container.html
