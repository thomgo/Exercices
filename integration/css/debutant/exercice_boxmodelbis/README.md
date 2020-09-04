# Consigne

Continuons de mettre en pratique le box-model avec un nouvel exercice. L'objectif est de continuer de vous familiariser avec cette notion qui est à la base de l'organisation d'une page web.

Pour cet exercice, vous rendrez :

- un fichier index.html

- un fichier style.css

Réalisez les actions suivantes :

- Dans votre fichier HTML, créez une liste non-ordonnée contenant 5 items remplis avec un texte d'exemple.

- Donnez une taille et une hauteur fixes à cette liste ainsi qu'un fond de couleur afin de pouvoir repérer ses contours facilement.

- Décollez votre liste du bord gauche de l'écran

- Appliquez une marge interne en haut et en bas de la liste

- Donnez une largeur fixe aux items de la liste et appliquez leur une couleur de fond

- Donnez leur une marge interne et externe sur les 4 côtés

Vous devriez obtenir un résultat similaire à celui-ci :

![exercice box-model bis](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/588e0b27ad98c7866b8bed7e/95ebcd1dadef734516a67d4fff88a281/exercice_boxmodelbis.png)

## Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice box model bis</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
      <li>Du texte de test</li>
      <li>Du texte de test</li>
      <li>Du texte de test</li>
      <li>Du texte de test</li>
      <li>Du texte de test</li>
    </ul>
  </body>
</html>

```

style.css

```
ul {
  margin-left: 100px;
  background-color: darkblue;
  padding: 2em 0;
  width: 400px;
  height: 600px;
}

li {
  background-color: white;
  margin: 2em;
  width: 100px;
  padding: 1em;
}

```
