# Consigne

Dans cet exercice nous allons mettre en pratique vos connaissances sur le sizing. L'objectif n'est pas de vous faire produire une page mais qu'en suivant les instructions vous vous rendiez compte des impactes des différentes unités sur votre design.

Vous rendrez :

- un fichier index.html

- un fichier style.css

Réalisez les actions suivantes et actualisez régulièrement votre page pour voir les changements en direct :

- Créez deux sections, une de classe first et l'autre de classe second, à l'intérieur ajoutez un article qui contiendra un paragraphe avec du texte.

- La section first fera 1000px de large sur 400px de haut, la seconde fera 500*200. Donnez leur une couleur de fond pour les repérer.

- Les articles auront 50% comme valeur pour la largeur et la hauteur, donnez leur une couleur de fond grise. Remarquez maintenant sur votre page la différence entre vos deux articles.

- Passez la taille de police à 32px dans la section first et à 20 px dans la section second.

- Donnez maintenant une taille de police de 2em à vos articles. Remarquez comment la police dans le deuxième article reste plus petite.

- Pour finir donnez une taille de police de 1rem au paragraphe de l'article de la section second. Remarquez comment la police est devenue encore plus petite.

Votre résultat final devrait ressembler à ça :

![exercice sizing](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/588b62e25edeb90a4becdd21/d87a192c6b9b866bbbbb03544948cd88/exercice_sizing.png)

## Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Le sizing en CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="first">
      <article>
        <p>Du texte de test</p>
      </article>
    </section>
    <section class="second">
      <article>
        <p>Du texte de test</p>
      </article>
    </section>
  </body>
</html>

```

style.css

```
body {
  margin: 0;
}

.first {
  width: 1000px;
  height: 400px;
  background-color: red;
  font-size: 32px;
}

.second {
  width: 500px;
  height: 200px;
  background-color: darkblue;
  font-size: 20px;
}

article {
  width: 50%;
  height: 50%;
  background-color: grey;
  font-size: 2em;
}

.second article p {
  font-size: 1rem;
}

```
