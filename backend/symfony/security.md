# Gérer la sécurité de l'application

Quand on code on n’aime pas vraiment réinventer la roue et c’est bien souvent ce que l’on fait quand on crée un système de gestion des utilisateurs. Dans cet exercice, vous allez rajouter une extension qui vous permettra de gérer vos utilisateurs. Dans Symfony il s’agit d’un bundle (FosUser), dans Laravel on les appelle les packages (Auth).

Regardez la doc pour installer ou activer ces extensions, une fois installée vous devez avoir au minimum:
- Une page pour vous connecter
- Une page pour créer un compte
- Une page de déconnexion

Vous devez donc pouvoir :
- Créer un utilisateur
- Gérer ses rôles, du simple visiteur à l’administrateur avec tous les droits
- Protéger un route en restreignant son accès à un certain type d’utilisateur

Assurez-vous que votre route admin ne soit accessible qu’aux utilisateurs qui sont administrateurs, si quelqu’un essaie d’accéder à cette page sans être connecté et être administrateur il est automatiquement redirigé.

Créez un utilisateur, donnez lui le rôle administrateur, essayez d’accéder à l’administration. Si tout se passe bien vous devez arriver sur la page admin, ensuite déconnectez vous et essayez de retourner sur la page, vous devez être redirigé.

Voilà vous venez de mettre en place un système de gestion des utilisateurs simple qui protège votre administration !  
