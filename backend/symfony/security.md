# Gérer la sécurité de l'application

Quand on code on n’aime pas vraiment réinventer la roue et c’est bien souvent ce que l’on fait quand on crée un système de gestion des utilisateurs. Dans cet exercice, vous allez utiliser le système de sécurité de Symfony qui vous permettra de gérer vos utilisateurs.

Regardez la documentation pour installer ce composant, vous devez avoir au minimum:
- Une page pour vous connecter
- Une page pour créer un compte
- Une page de déconnexion

Vous devez donc pouvoir :
- Créer un utilisateur
- Gérer ses rôles, du simple visiteur à l’administrateur avec tous les droits
- Protéger un route en restreignant son accès à un certain type d’utilisateur

Assurez-vous que votre route admin ne soit accessible qu’aux utilisateurs qui sont administrateurs, si quelqu’un essaie d’accéder à cette page sans être connecté et être administrateur il est automatiquement redirigé.

Créez un utilisateur, donnez lui le rôle administrateur, essayez d’accéder à l’administration. Si tout se passe bien vous devez arriver sur la page admin, ensuite déconnectez vous et essayez de retourner sur la page, vous devez être redirigé vers la page de login.

Voilà vous venez de mettre en place un système de gestion des utilisateurs simple qui protège votre administration !

Pour vous aider :
- https://symfony.com/doc/current/security.html   
