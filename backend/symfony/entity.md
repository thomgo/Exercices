# Créer ses entités et leurs migrations

Vous allez maintenant créer l’entité/migration centrale de votre site, j’ai nommé l’entité article. Elle sera composée des attributs suivants :

- Titre
- Contenu
- Date de création
- Nom de l’auteur associé
- Nom de la catégorie associée
- Nombre de vues

Attention pour l'instant auteur et catégorie, ne font pas références à d'autres entité, ce sont de simples chaînes de caractères

Une fois votre entité/migration créée, mettez à jour votre schéma de base de données à l'aide de la console. Normalement vous devriez voir une nouvelle table apparaître dans MySQL.

Dans l'entité article rajoutez une méthode qui vous retourne les 50 premiers caractères du contenu, elle vous servira à l’exercice suivant

Prenez quelques minutes pour insérer un jeu de données. Deux solutions :
- En mode bricolage dans PhpMyAdmin
- En mode pro en utilisant les fixtures.

Pour vous aider :
- https://symfony.com/doc/current/doctrine.html
- https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
