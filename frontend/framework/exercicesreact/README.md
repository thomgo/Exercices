# Exerices pour l'apprentissage de REACT JS

Cette série d'exercices vous guidera au travers de la réalisation d'une page mettant en oeuvre les concepts fondamentaux de REACT. A la fin de ces exercices, vous aurez normalement une meilleure compréhension et maîtrise des compétences suivantes :
- Utiliser l'outil en ligne de commande pour créer une application REACT
- Créer un composant à base de classe ou de fonction
- Passer et exploiter des props dans un composant
- Gérer les états d'un composant et la mise à jour de l'affichage
- Utiliser JSX pour gérer l'affichage de ses composants
- Utiliser map à la place des boucles traditionnelles
- Utiliser le hook d'état

## Etape 0 : démarrer son projet

Avant de se lancer dans les exerices encore faut-il démarrer notre application REACT. Pour cela vous allez créer une nouvelle application à l'aide de create-react-app.

Une fois l'application créée, vous allez réaliser un template minimale composé d'un header et d'un footer afin de vous familiariser avec la réalisation d'un layout basique.

Dans un premier temps, ne faites pas trop compliqué vous pouvez simplement intégrer votre header et votre footer dans le fichier app.js

Une fois ceci fait par contre il serait intéressant pour des questions de maintenabilité de créer un composant pour le header et un pour le footer. N'hésitez pas à créer un sous-dossier components dans src afin d'y stocker vos composants.

Dans un second temps pourquoi ne pas faire un peu de mise en forme ? Vous pouvez bien évidemment écrire dans le fichier app.css mais pourquoi ne pas essayer d'installer bootstrap à l'aide npm ? (https://create-react-app.dev/docs/adding-bootstrap/)

NB : tous les exercices de cette série seront réalisés sur la même page à la suite, pas de routing ou de menu pour l'instant.

## Exercice 1 : Présenter quelqu'un

Réalisez un composant très simple, à base de fonction ou de classe peu importe ce que vous préférez. Ce composant à pour objectif de vous présenter. Il affiche donc à l'écran votre prénomn, votre nom, votre age, votre emploi, votre hobby et une description. Pour l'instant il s'agit juste d'un composant qui fait de l'affichage "en dur".

Une fois que votre composant fonctionne, est intégré dans app.js et affiche les informations demandées à l'écran il serait maintenant temps de le rendre un peu plus utile. En l'état votre composant ne peut présenter qu'une seule personne : vous. Si on souhaite présenter un autre utilisateur, on ne peut pas. Le mieux serait donc de faire en sorte que votre composant attende des props et spécifiquement un objet au format JSON contenant les données de l'utilisateur à afficher. Cet objet peut-être déclaré en dur dans le fichier app.js avant d'être passé au composant.

Voici par exemple un objet que je dois pouvoir passer à mon composant, ici l'objet est écrit en dur mais il pourrait très bien provenir d'une API :

```
let user = {
    firstname: "Thomas",
    lastname: "Gossart",
    age: 29,
    job: "Formateur",
    hobby: "Le vélo",
    description: "Lorem ipsum"
  }
```

Astuce : pour réussi vous devrez utilisez les props un concept fondamental de REACT.

## Exercice 2 : allumer la lumière

Il est très fréquent sur des interfaces qu'une action de l'utilisateur entraîne une modification visuelle de l'interface en question. Au final en y réfléchissant bien c'est la base de l'interactivité.

C'est ce que vous allez faire ici. Votre composant pour cet exercice affiche un boutton et une div. Par défaut la lumière est éteinte, le bouton affiche donc le texte "allumer" et la div est noire. Quand l'utilisateur clique sur la div la lumière s'allume, c'est à dire que le bouton affiche "éteindre" et le fond de la div passe dans une nuance de jaune ou d'orange. Bien évidemment si l'utilisateur appuie à nouveau c'est le processus inverse qui est exécuté.

Astuce : pour réaliser cet exercice vous allez devoir utiliser une variable d'état qui représentera l'état de la lumière (allumée ou non). Si vous n'utilisez pas d'état l'affichage ne sera pas mis à jour. Vous allez également devoir utiliser l'évènement onClick de REACT afin de déclencher le changement d'état et vous devrez conditionner le CSS de l'élément HTML à cet état.

## Exercice 3 : une todolist

Pour ce dernier exercice, vous allez réaliser un composant qui affiche une todolist. le principe est simple, à gauche un input de texte et un bouton "ajouter", à droite une liste qui par défaut est vide. Quand l'utilisateur clique sur le bouton, la valeur de l'input est récupérée et ajoutée dans la liste des tâches à faire.

Astuce : pour réaliser cet exercice il faudra d'abord vous renseigner sur la gestion des formulaires en REACT(https://fr.reactjs.org/docs/forms.html). Il vous faudra au moins deux états, un pour gérer la valeur de l'input en temps réel et un pour stocker les tâches au fur et à mesure. Vous devrez donc aussi faire appel à deux types d'évènements différents. N'oubliez pas que l'affichage n'est mis à jour que l'orsque que l'état est modifé.