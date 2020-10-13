# Exercice 8 : héritage

Créez une classe abstraite personne. Elle déclare les propriétés :
- nom
- prénom

Créez une classe client héritant de la classe personne en y ajoutant la propriété adresse. Client dispose d’une méthode getCoord() qui affiche les coordonnées complètes de la personne. Elle affiche par exemple « nom + prénom  habite au adresse ».

Créez une classe électeur héritant elle aussi de la classe personne, et ajoutez-y deux propriétés :
- bureau (pour bureau de vote),
- vote (un booléen pour indiquer si la personne a voté)

La classe électeur contient aussi une méthode aVoter(), qui enregistre si une personne a voté dans la propriété vote et affiche un message de succès.

Si la personne a déjà voté elle affiche un message d’erreur indiquant qu'on ne peut voter deux fois.
