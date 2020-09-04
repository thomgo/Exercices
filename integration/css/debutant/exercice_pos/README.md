# Consignes

L'heure est venue de mettre en pratique ce que vous avez vu sur le positionnement. Dans cet exercice nous allons créer une architecture classique de site internet. La position de vos éléments sur la page sera au final très proche de ce que l'on trouve sur le net. Elle ressemblera au schéma présenté au chapitre précédent.

Vous rendrez :

- un fichier index.html

- un fichier style.css

Votre squelette HTML comportera :

- un header avec un h1

- un aside avec un menu

- une section principale avec des articles

- un footer avec un paragraphe

L'objectif est d'obtenir un positionnement des éléments semblable au suivant (le footer sera réalisé sur le modèle du header) :

![exercice de positionnement](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/587cd16504059bdca4faf537/805f2c869d75dd9f94d3ced4a0c4536a/positionnement.png)

Pour vous aider à vous repérer, je vous conseille de mettre une couleur de fond à vos éléments. Je vous laisse chercher la propriété CSS qui permet de faire cela (un indice, nous l'avons déjà vue dans un chapitre précédent).

## Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Le box modèle et le positionnement</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>

<!-- Header  -->
<header>
  <h1>Le box modèle</h1>
</header>

<!-- Main content -->

<!-- left aside with the navigation -->
<aside>

  <nav>
    <ul>
      <li><a href="">lien 1</a></li>
      <li><a href="">lien 2</a></li>
      <li><a href="">lien 3</a></li>
      <li><a href="">lien 4</a></li>
    </ul>
  </nav>

</aside>

<!-- Main content -->
<section>

  <article>
    <h2>Titre d'article</h2>
    <p>contenu texte</p>
  </article>

  <article>
    <h2>Titre d'article</h2>
    <p>contenu texte</p>
  </article>

  <article>
    <h2>Titre d'article</h2>
    <p>contenu texte</p>
  </article>

</section>

<!-- footer -->
<footer>
  <p>Une réalisation Simplon Roubaix</p>
</footer>

  </body>
</html>

```
style.css

```
/*Common rules*/

html, body, section, aside {
  height: 100%;
}

body, header, footer {
  width: 100%;
}

section, article {
  width: 60%;
}

article, footer, header {
  text-align: center;
}

body, h1, h2 {
  margin: 0;
}

/*Specific rules*/

header {
  background-color: orange;
  height: 15%;
  padding-top: 2.5em;
  margin-bottom: 3em;
}

aside, section {
  display: inline-block;
  vertical-align: top;
}

aside {
  background-color: lightblue;
  width: 20%;
  margin : 0 4%;
}

nav {
  background-color: red;
  width: 80%;
  margin: auto;
}

nav li {
  margin : 1em 0;
}

section {
  background-color: lightgrey;
  margin: 0 4% 3em 4%;

}

article {
  background-color: purple;
  height: 25%;
  margin: 1em auto 1em auto;
  padding: 1em;
}

footer {
  height: 20%;
  background-color: green;
  padding-top: 4em;
}

```
