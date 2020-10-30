# Gérer ses formulaires

Pour le moment notre administration est un peu vide. Nous pouvons nous connecter pour y accéder mais on ne peut pas y faire grand-chose. Nous allons donc rajouter un formulaire qui nous permettra d’ajouter des articles en base de données.

Réalisez les action suivantes :

- Créez un formulaire sur la base de votre entité, c'est à dire que les champs correspondent aux propriétés de l'objet. Idéalement vous le faites dans un fichier à part.

- Spécifiez les types de champs du formulaire

- Instanciez ce formulaire dans votre contrôleur, passez le à la vue puis affichez le

- Ajoutez un ensemble de contraintes sur votre entité article (titres uniquement composé de lettres et compris entre 2 et 150 caractères, nom de l’auteur composé de lettres uniquement et de maximum 50 caractères)

- Dans votre contrôleur gérez la soumission de votre formulaire en vous assurant qu’il s’agit bien d’une méthode POST et que votre formulaire est valide, créez l’entité correspondante puis enregistrez la en base de données à l'aide l'ORM.

Normalement, vous devez voir un nouvel article apparaître sur la page d’accueil quand vous remplissez puis soumettez le formulaire !

Pour vous aider :
-https://symfony.com/doc/current/forms.html
- https://symfony.com/doc/current/validation.html
