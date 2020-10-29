# Créer ses entités et leurs migrations

Vous allez maintenant créer l’entité/migration centrale de votre site, j’ai nommé l’entité article. Elle sera composée des attributs suivants :

- Titre
- Contenu
- Date de création
- Nom de l’auteur associé
- Nom de la catégorie associée
- Nombre de vues

Une fois votre entité/migration créée, mettez à jour votre schéma de base de données, normalement vous devriez voir une nouvelle table apparaître dans MySQL.

Selon votre framework, rajoutez une méthode qui vous retourne les 50 premiers caractères du contenu, elle vous servira à l’exercice suivant

Prenez quelques minutes insérer un jeu de données (vous le faire en mode bricolage dans PhpMyAdmin ou faire les pros et utilisez les outils spécialement conçus à cet effet dans les frameworks)  cela nous permettra d’alimenter nos futures vues.
