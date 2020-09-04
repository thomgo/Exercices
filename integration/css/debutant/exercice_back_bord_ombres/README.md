# Testez votre maîtrise du CSS (couleurs, background, bordures...)

Un exercice sur la base de celui de Jonathan Path : http://codepen.io/jonathanpath/full/xJsCe

Réalisez les designs suivants à l'aide de CSS :

- 1 Image de fond en fullscreen
- 2 Titre de niveau 2, vert et en majuscule, avec un paragraphe. Le paragraphe sera encadré par une bordure noire de 5px arrondie.
- 3 Un texte avec des lettres espacées de 2px, qui font 50px de taille, qui ont une couleur de fond bleu et une couleur de texte blanche
- 4 Formulaire avec un champ de saisie et un bouton avec une bordure rouge, un fond légèrement gris, une ombre rouge et du texte en bleu sombre
- 5 Un paragraphe qui contient un lien rouge avec un fond noir et une bordure verte pointillée de 3px vers un site web de votre choix
- 6 Faites une liste à puce avec un espacement de 10px entre chaque ligne et appliquez une ombre à chaque item

Vous connaissez la plupart des propriétés pour répondre à ces questions mais certaines vous sont peut-être inconnues, comme à chaque fois vous devrez donc consulter la documentation.

Voici le résultat que vous devriez obtenir pour chaque question (réponse 1 non-incluse).

![résultat exercice](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/587ddc23fbed70f60478c9f4/5c47b093c7cfcc2e91d58db89c55be6a/exercice_backgrond_color_etc.png)

## Correction

1)

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice supplémentaire CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="container"></section>
  </body>
</html>

```

```

html {
  width: 100%;
  height: 100%;
}

body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.container {
  margin: 0;
  width: 100%;
  height: 100%;
  background-image: url("background.jpg");
  background-position: center;
}

```

2)

```
  <body>
    <h2>Voilà un titre de niveau 2</h2>
    <p>Voilà notre paragraphe avec plein d'informations intéressantes</p>
  </body>

```

```
h2, p {
  color: green;
  text-transform: uppercase;
}

p {
  border: 5px solid black;
  border-radius: 5px;
}

```
3)

```
  <body>
    <p>Voilà notre paragraphe avec plein d'informations intéressantes</p>
  </body>

```

```
p {
  font-size: 50px;
  letter-spacing: 2px;
  background-color: blue;
  color: white;
}

```

4)

```
  <body>
    <form action="">
      <input type="text">
      <input type="submit" value="Envoyer">
    </form>
  </body>

```

```
input {
  border: 2px solid #c42727;
  border-radius: 3px;
  background-color: lightgrey;
  color: darkblue;
  box-shadow: 2px 2px 4px #c42727;
}

```

5)

```
  <body>
    <p>Voici un texte de paragraphe et un <a href="www.google.fr">lien vers un site web</a></p>
  </body>

```

```
p a {
  color: red;
  background-color: black;
  border: 3px dotted green;
}

```

6)

```
<body>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
      <li>Item 4</li>
      <li>Item 5</li>
    </ul>
 </body>

```

```
ul li {
  margin: 5px 0;
  box-shadow: 3px 3px 5px grey;
}

```
