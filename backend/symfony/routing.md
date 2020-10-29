# Réaliser un système de routing

Toute application a un point de départ et outre la création du dossier contenant les fichiers de votre framework préféré, la première chose que l’on fait est bien souvent de définir des routes.

Dans ce premier exercice, vous allez donc créer des routes, chaque route déclenchera une méthode d’un contrôleur qui renverra une vue spécifique comme réponse. Voici les routes à créer :

- Une route qui matchera l'url racine de votre site ou /index. Ce sera la route par défaut, celle de l’accueil.

- Une route single qui correspondra à la route vers laquelle le visiteur est redirigé quand il clique sur un article. Cette route matchera l'url /article/id. Le paramètre id ne peut être composé que de chiffres et sera mis par défaut à 1 s’il n’est pas rempli.

- Une route pour l’ajout d’un article dans l’espace d’administration qui matchera l'url admin/article/add.
