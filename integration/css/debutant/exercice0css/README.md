# L'heure du premier CSS est arrivée !

## Consignes

Il est maintenant temps de mettre en pratique ce que vous avez appris, je suis sûr que vous n'attendiez que ça ! Pour ce premier exercice rien de bien compliqué, vous avez à votre disposition une page HTML contenant du contenu texte et vous devez le mettre en forme.

Vous devrez :

- Passer le titre de premier niveau en police 80 pixels et l'aligner au centre de la page

- Passer le titre de niveau de deux en police 40 pixels

- Mettre les paragraphes en italique

- Mettre le span en gras

- Barrer le lien (celui-là est un peu plus compliqué à faire, vous devrez peut-être regarder sur internet)

Voilà le résultat attendu :

![premier exercice css](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/587e29fa0a110389fb989cf9/17601f134ea662b41ce1938413c4dd40/exercice0css.png)

## Correction

Index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Votre premier CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<h1>Titre principal</h1>

<h2>Titre secondaire</h2>

<p>Un paragraphe avec du texte d'exemple</p>

<p>Un paragraphe avec du texte d'exemple</p>

<span>revenir en arrière</span>

<a href="www.google.com">Lien</a>

  </body>
</html>

```
Style.css

```
h1 {
  font-size: 80px;
  text-align: center;
}

h2 {
  font-size: 40px;
}

p {
  font-style: italic;
}

span {
  font-weight: bold;
}

a {
  text-decoration: line-through;
}

```
