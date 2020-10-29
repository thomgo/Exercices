# Créer un service

Votre blog avance plutôt bien mais dès qu’il va grossir vous allez commencer à devoir réemployer des fonctions sur différentes pages pour réaliser plusieurs fois les mêmes actions, bref vous allez dupliquer du code ce qui n’est pas bien.

Créons un service qui vérifie qu’il n’y ait pas d’insultes dans le contenu de nos articles (oui notre blog sera tous publics).

Concrètement vous allez créer un service avec une méthode qui vérifie la présence d’insultes dans le contenu d’un article et les remplace par des dièses si elle en trouve. Vous utiliserez ce service dans le controller de la route single avant l’affichage du contenu de l’article.
