# Consigne

Dans cet exercice, nous allons continuer à nous exercer avec la mise en forme avancée de nos document HTML. Pour cet exercice vous rendrez :

- un fichier index.html

- un fichier style.css

Votre fichier HTML sera très simple, il se composera d'un header avec un titre de premier niveau. Sous se header se trouve 4 boîtes de type article avec des titres de second niveau.

Là où cela se complique un peu c'est au niveau de la mise en forme. Vous devrez :

- Mettre une image de fond à votre header (image fournie ou autre)

- Appliquer une ombre sur le titre de niveau un

- Appliquer une bordure au bas de votre header ainsi qu'un ombrage

- Mettre vos boxes en ligne

- Leur appliquer une bordure en relief et un ombrage externe

- Appliquer une ombre sur vos titres de niveau deux

Vous êtes libre d'utiliser les couleurs que vous voulez, pour vous aider, voici ce à quoi pourrait ressembler le résultat final :

![exercice bis sur style avancés](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/588728da8e14acd8092d0732/39f2add12d540e6556967d8b6a0d1c96/ex_back_border_ombre.png)

# Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bordures, background et ombres</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Header with main title -->
    <header>
      <h1>Un exercice sur la mise en forme avancée avec CSS</h1>
    </header>

    <!-- Boxes articles -->
    <article>
      <h2>News</h2>
    </article>
    <article>
      <h2>News</h2>
    </article>
    <article>
      <h2>News</h2>
    </article>
    <article>
      <h2>News</h2>
    </article>

  </body>
</html>

```

style.css

```
/*Common rules*/

html {
  width: 100%;
  height: 100%;
}

body {
  width: 100%;
  height: 100%;
  margin: 0;
}

h1, h2, h3, h4 {
  margin: 0;
}

header, article {
  text-align: center;
  color: #89023e;
}

/*Header rules*/

header {
  width: 100%;
  height: 25%;
  background-image: url("fond.jpg");
  background-position: center;
  font-size: 28px;
  padding-top: 2em;
  margin-bottom: 3em;
  text-shadow: 3px 3px 4px lightgrey;
  border-bottom: 5px solid #89023e;
  box-shadow: 3px 3px 4px #1b2021;
}

/*Boxes rules*/

article {
  width: 20%;
  height: 40%;;
  background-color: #ffd9da;
  display: inline-block;
  margin: 0 2.1%;
  border: 3px outset #ea638c;
  box-shadow: 2px 2px 3px black;
  font-size: 22px;
}

article h2 {
  margin-top: 3.5em;
  text-shadow: 1px 1px 2px black;
}

```
