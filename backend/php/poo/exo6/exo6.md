# Exercice 6 : gérer ses objets en base de données

Dans cet exercice vous allez gérer petite base de données simple en orienté objet, celle-ci vous permettra de gérer des chats.

**étape 1** :

Créez une classe chat avec les attributs suivants :
- Nom
- Age
- Sexe
- Couleur

N’oubliez pas que votre chat ne peut avoir que deux sexes différents, il s’agit donc d’une valeur constante. Idem pour les couleurs. Ces valeurs nous serviront à effectuer des vérifications

N’oubliez également de forcer le typage des arguments dans vos fonctions.

Dans vos setters vérifiez entre autres que :
- Le nom ne dépasse pas 15 caractères
- L’age est compris entre 0 et 30
- Le sexe appartient aux sexes définis dans la constante de classe
- La couleur appartient aux couleurs définies dans la constante de classe

**Etape 2** :

Dans MySQL créez une base de données avec dedans une table chat dont les colonnes reprennent les attributs de notre classe.

Créez un objet chatManager vous permettant de gérer vos chats en base de données. Cette objet vous permettra notamment :
- d’enregistrer un objet chat en BDD
- de sélectionner tous les chats de votre base de données et de les récupérer sous forme d'objet

**Etape 3** :

Créez une vue contenant un formulaire, quand l’utilisateur remplit ce formulaire, un nouvel objet chat est créé puis enregistré en base de données et il apparaît dans la vue qui liste tous les chats enregistrés.
