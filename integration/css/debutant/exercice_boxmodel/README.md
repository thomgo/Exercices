# Consigne

L'heure est venue de mettre en pratique ce que vous savez du box- model et des propriétés physiques des boîtes.

Pour cet exercice pas de gros défi, l'objectif est avant tout de vous familiariser avec les propriétés physiques des boîtes et de commencer à vous habituez à leur comportement.

Vous verrez peut-être quelques comportements étranges que nous n'avons pas évoqués, pas de panique, plus tard quand vous utiliserez de vrais outils de développement ils auront disparu.

Vous rendrez :

- un fichier index.html

- un fichier style.css

Réalisez les actions suivantes :

- Dans votre fichier HTML ajoutez un header qui contient une div qui contient un paragraphe avec un petit texte.

- Donnez pour commencer à votre  body et votre paragraphe une margin nulle

- Déterminez la taille de votre header (largeur, hauteur) en pixels et donnez lui une couleur de fond pour bien le distinguer.

- Décollez votre header du sommet de votre page de 100px

- Donnez à votre div une taille égale à 50% du header et une couleur de fond différente

- Centrez cette div sur l'axe horizontal par rapport au header

- Donnez une margin à votre paragraphe pour le décoller de sa div parente (disons environ 1em)

- Pour finir jouez sur les padding du header et de la div pour essayer de les centrer sur l'axe vertical. L'objectif n'est pas que cela soit parfaitement centré mais simplement que vous vous entraîniez à travailler avec les padding.

Vous devriez normalement obtenir un résultat semblable à celui-ci :

![exercice sur le box-model](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/5889d113a5a76b826a3d2b77/f2569649741fd13d4cad4b02fefc3cec/boxmodel1.png)

## Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nos premier pas dans le box-model</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div>
        <p>Voila du texte à mettre dans votre paragraphe</p>
      </div>
    </header>
  </body>
</html>

```
style.css

```
p, body {
  margin: 0;
}

header {
  width: 600px;
  height: 300px;
  background-color: darkblue;
  margin-top: 100px;
  padding: 70px;
}

div {
  width: 50%;
  height: 50%;
  background-color: red;
  margin: auto;
  padding-top: 3em;
}

p {
  margin: 1.5em;
}

```
