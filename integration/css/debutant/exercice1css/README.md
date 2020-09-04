## Consignes

Voilà l'heure est venue de vous jeter dans le bain et de réaliser votre première page HTML mise en forme avec du CSS.

Pour cet exercice, vous rendrez :

 - un fichier html

 - un fichier css

Faites bien attention aux noms de vos fichiers !

Votre fichier HTML sera structuré de la manière suivante :

- Il commence par un titre de premier niveau, aligné au centre, en gras et environ trois fois plus grand que sa taille initiale.

- Un index aligné à droite comportant un titre de niveau deux de taille légèrement inférieure à votre premier titre et une liste ordonnée contenant trois éléments de type lien

- Deux titres de niveau trois en italic environ deux fois plus grands que leur taille initiale

- Sous chaque titre de niveau trois il y aura une liste non-ordonnée comportant deux éléments et sous chaque élément il y aura un paragraphe

- La liste non-ordonnée ne doit pas avoir l'air d'une liste, on ne doit pas voir de puce devant les éléments, les éléments de toutes les listes doivent être soulignés et les paragraphes doivent être légèrement inférieurs à la taille standard du texte et être écrits en oblique.

La plupart des propriétés on déjà été vues mais vous devrez aller en chercher certaines dans la documentation.

N'oubliez surtout pas les bonnes pratiques c'est à dire commentez votre code HTML et CSS en anglais et essayez d'intégrer les éléments cités au dessus dans des balises sémantiques.

Pour commenter du texte en CSS : /* Votre commentaire */

Voilà un aperçu du rendu souhaité :

![rendu exercice 1 css](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/586e2b61925b57368f7f44b6/221e1fb08c89d2f14268bbabdd30cebe/exercice1.png)

## Pour aller plus loin

Si vous le souhaitez (et je vous le conseille) essayez de vous entraîner à utiliser les em pour vos tailles de polices et de voir comment elles réagissent selon la valeur que vous leur donnez.

Cela vous permettra de commencer à appréhender les em et vous sera utile par la suite.

## Corrigé

Fichier index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Votre premier CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Main title of the site -->
    <header>
      <h1>J'applique ma première feuille de style</h1>
    </header>


    <!-- Index on the right with a link list -->
    <aside>
      <h2>Index</h2>
      <ol>
        <li><a href="#">Element 1</a></li>
        <li><a href="#">Element 2</a></li>
        <li><a href="#">Element 3</a></li>
      </ol>
    </aside>

    <!-- First section about the css -->
    <section>
      <h3>Le CSS c'est super</h3>
      <ul>
        <li>Il met en forme mon HTML</li>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra dolor sed feugiat mattis. Morbi sodales rhoncus ex, a efficitur lacus lacinia in. Aliquam erat volutpat. Phasellus mattis sed justo at faucibus. Proin id consectetur elit. Fusce lorem ipsum, convallis vel sem eu, cursus efficitur tortor. Etiam vitae nunc lacus. Maecenas mattis tortor dui, mollis mollis enim finibus et. Mauris vel orci condimentum, vehicula odio faucibus, dapibus est. Morbi placerat dolor massa, at luctus orci faucibus ac. Nulla laoreet lacus nulla, eu auctor nulla tristique mollis. Cras suscipit lorem erat. Sed tortor ex, vehicula id ante rhoncus, molestie efficitur sem. Praesent convallis scelerisque leo vitae sodales. Donec commodo, massa eu efficitur pellentesque, orci nulla aliquet nunc, id faucibus orci lectus porttitor metus.
        </p>
        <li>Il est simple à écrire</li>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra dolor sed feugiat mattis. Morbi sodales rhoncus ex, a efficitur lacus lacinia in. Aliquam erat volutpat. Phasellus mattis sed justo at faucibus. Proin id consectetur elit. Fusce lorem ipsum, convallis vel sem eu, cursus efficitur tortor. Etiam vitae nunc lacus. Maecenas mattis tortor dui, mollis mollis enim finibus et. Mauris vel orci condimentum, vehicula odio faucibus, dapibus est. Morbi placerat dolor massa, at luctus orci faucibus ac. Nulla laoreet lacus nulla, eu auctor nulla tristique mollis. Cras suscipit lorem erat. Sed tortor ex, vehicula id ante rhoncus, molestie efficitur sem. Praesent convallis scelerisque leo vitae sodales. Donec commodo, massa eu efficitur pellentesque, orci nulla aliquet nunc, id faucibus orci lectus porttitor metus.
        </p>
      </ul>
    </section>

  <!-- Second section about the HTML -->
    <section>
      <h3>Le HTML c'est trop cool</h3>
      <ul>
        <li>Il organise ma page</li>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra dolor sed feugiat mattis. Morbi sodales rhoncus ex, a efficitur lacus lacinia in. Aliquam erat volutpat. Phasellus mattis sed justo at faucibus. Proin id consectetur elit. Fusce lorem ipsum, convallis vel sem eu, cursus efficitur tortor. Etiam vitae nunc lacus. Maecenas mattis tortor dui, mollis mollis enim finibus et. Mauris vel orci condimentum, vehicula odio faucibus, dapibus est. Morbi placerat dolor massa, at luctus orci faucibus ac. Nulla laoreet lacus nulla, eu auctor nulla tristique mollis. Cras suscipit lorem erat. Sed tortor ex, vehicula id ante rhoncus, molestie efficitur sem. Praesent convallis scelerisque leo vitae sodales. Donec commodo, massa eu efficitur pellentesque, orci nulla aliquet nunc, id faucibus orci lectus porttitor metus.
        </p>
        <li>Il est lu par tous les navigateurs</li>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra dolor sed feugiat mattis. Morbi sodales rhoncus ex, a efficitur lacus lacinia in. Aliquam erat volutpat. Phasellus mattis sed justo at faucibus. Proin id consectetur elit. Fusce lorem ipsum, convallis vel sem eu, cursus efficitur tortor. Etiam vitae nunc lacus. Maecenas mattis tortor dui, mollis mollis enim finibus et. Mauris vel orci condimentum, vehicula odio faucibus, dapibus est. Morbi placerat dolor massa, at luctus orci faucibus ac. Nulla laoreet lacus nulla, eu auctor nulla tristique mollis. Cras suscipit lorem erat. Sed tortor ex, vehicula id ante rhoncus, molestie efficitur sem. Praesent convallis scelerisque leo vitae sodales. Donec commodo, massa eu efficitur pellentesque, orci nulla aliquet nunc, id faucibus orci lectus porttitor metus.
        </p>
      </ul>
    </section>

  </body>
</html>


```

Fichier style.css

```
/*Titles styles*/

h1 {
  text-align: center;
  font-weight: bold;
  font-size: 3em;
}

h2 {
  text-align: right;
  font-size: 2.5em;
}

h3 {
  font-size: 2em;
  font-style: italic;
}

/*List styles*/

ol {
  text-align: right;
}

ul {
    list-style-type: none;
}

li {
  text-decoration: underline;
  font-weight: bold;
}

/*Content style*/

p {
  font-size: 0.9em;
  font-style: oblique;
}


```
