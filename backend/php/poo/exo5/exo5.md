# Exercice 5 : L’opérateur de résolution de portée

Dans cet exercice vous aller créer une classe très simple chargée de représenter un objet que vous connaissez : les Renault Clio.

Vous allez donc déclarer une classe clio dans laquelle nous allons intégrer quelques caractéristiques d’une vraie clio à savoir :
- le nombre de portes
- la couleur de la carrosserie
- le prix neuf de la voiture.

Une fois cette classe avec ses attributs, ses getters et ses setters créée, instanciez plusieurs clio avec des nombres de portes différents et des couleurs différentes et affichez ces valeurs à l’écran.

**Attention** : l’objectif de cet exercice est de vous faire travailler sur l’opérateur de résolution de portée, c’est à dire les constantes de classe, les attributs statiques et les fonctions statiques. Autrement-dit il faudra bien vous interroger sur ce que vous utilisez, il n’y aura pas que de simples attributs et méthodes dans votre classe.

Pour vous aider, voici quelques informations que vous devriez savoir :

- Une clio n’a que deux nombres de portes possibles : 3 et 5 cela ne change jamais !
- Une clio n’a que 8 couleurs de carrosserie possibles, une couleur est définie par un nom « bleu nuit » par exemple et une référence couleur telle que 213800058. Quand on demande la couleur de la carrosserie avec le getter, c’est cette référence qui est retournée.
- Le prix neuf de la voiture est commun à toutes les clios créées, si le prix neuf d’une voiture change alors celui de toutes les voitures change aussi.
