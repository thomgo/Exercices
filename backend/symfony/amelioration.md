# Aller plus loin et améliorer son application

Voici quelques idées de fonctionnalités que vous pouvez rajouter à votre blog :

- Actuellement vous avez une entité utilisateur mais elle n'est pas connectée à votre entité article. En effet la propriété author est une chaîne de caractères. Grâce à doctrine réalisez un mapping et liez cette propriété à l'entité User de telle sorte que l'article soit lié à l'administrateur qui l'a écrit.

- Pour l'instant la propriété nombre de vues n'a pas été utilisée. Sur la méthode de la page single, faites en sorte qu'à chaque fois que cette page est visitée le nombre de vues de l'article s'incrémente de 1 et soit sauvegardé en base de données.

- Quand l'administrateur remplit un formulaire affichez lui un message de succès ou d'erreur à l'aide des messages flash

- Si vous n'aviez pas utilisé les fixtures précédemment faites en sorte de peupler votre BDD à l'aide de cet outil

- Ajoutez la possibilité aux utilisateurs connectés peu importe leur statut de laisser un commentaire sur l'article
