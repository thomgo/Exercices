# Gérer ses formulaires

Pour le moment cependant, notre administration est un peu vide, nous pouvons nous connecter pour y accéder mais on ne peut pas y faire grand-chose. Nous allons donc rajouter un formulaire qui nous permettra d’ajouter des articles en base de données.

Réalisez les action suivantes :

- Créez un formulaire sur la base de votre entité
- Spécifiez les types de champs du formulaires
- Appelez ce formulaire dans votre controller, passez le à la vue puis affichez le
- Ajoutez un ensemble de contraintes sur votre entité article (titres uniquement composé de lettres et  compris entre 2 et 150 caractères, nom de l’auteur composé de lettres uniquement et de maximum 50 caractères)
- Dans votre contoller gérez la soumission de votre formulaire en vous assurant qu’il s’agit bien d’une méthode POST et que votre formulaire est valide, créez l’entité correspondante puis enregistrez la.
Normalement, vous devez voir un nouvel article apparaître sur la page d’accueil !
