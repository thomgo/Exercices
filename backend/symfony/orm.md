# Afficher des données grâce à l'orm

Maintenant que vos routes et votre entité ont été créées, l’heure est venue d’afficher les données sur notre site. Pour cela vous allez réalisez les opérations suivantes :

Dans la méthode de l’accueil :
- Vous allez récupérer les trois derniers articles insérés en base de données.
- Vous allez passer ces articles à la vue
- Dans la vue bouclez sur le tableau afin d’afficher ces trois articles sous formes de cartes. Dans chaque carte affichez toutes les informations de l’article sauf son contenu dont vous n’afficherez que l’extrait.

Dans la méthode de la route single :
- Vous allez récupérer l’article dont l’id est égal au paramètre de votre route
- Vous le passez à la vue
- Dans la vue vous affichez toutes ses informations détaillées

Pour vous aider :
- https://symfony.com/doc/current/doctrine.html
- https://symfony.com/doc/current/controller.html#rendering-templates
- https://symfony.com/doc/current/templates.html#template-variables
