# Consigne

Normalement vous savez utiliser les couleurs sous leurs différentes notations. Dans cet exercice, nous allons continuer à travailler avec les couleurs, mais nous allons également voir comment les utiliser en rapport avec les classes. Pour simplifier les développements CSS il est courant d'utiliser des classes pour les couleurs.

Vous ne comprenez pas encore ? Pas de panique après cet exercice tout sera clair.

Créez dans un premier temps un fichier index.html qui contiendra :

- Un header avec un un titre de niveau un

- 4 articles contenant chacun un titre de niveau deux et un paragraphe

Créez maintenant votre fichier style.css :

- Votre header fera 100% de l'écran en largeur et 200px de haut, le texte sera aligné au centre et il aura une légère margin en haut

- Vos articles feront 300*400px, seront sur une même ligne et centrés

- Créez une classes headerstyle, son fond sera bleu nuit et sa police vert-dorée

- Créez une classe coldstyle et flashstyle. Toutes deux auront pour couleur de police le bleu utilisé précédemment. Coldstyle aura un fond mauve et flashstyle un fond rose.

- Créez une classe whitetitle dont la couleur de police sera blanche et le texte aligné au centre.

Voilà vous avez maintenant un squelette HTML et des classes CSS prêtes à être utilisées. Appliquez votre classe headerstyle à votre header, vos classes coldstyle et flashstyle à vos articles et pour finir appliquez votre classe whitetitle aux titres des articles de classe coldstyle.

Vous venez d'appliquer vos couleurs sur votre page. Le gros avantage de cette méthode est de pouvoir rapidement modifier votre style tout en limitant le risque de conflits quand vous travaillez à plusieurs.

Vous devriez normalement obtenir un rendu proche de celui-ci :

![exercice couleur bis](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/5885e0f9963b15fb64b03daa/7d52f1e5d7d9e7e57e7b358c6f6c7ccb/couleurbis.png)

# Correction

index.html :

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les couleurs en CSS bis</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <header class="headerstyle">
    <h1>Utilisons les couleurs avec des classes</h1>
  </header>

  <article class="coldstyle">
    <h2 class="whitetitle">Voici un article</h2>
    <p>Un texte de description du contenu de l'article...</p>
  </article>

  <article class="flashstyle">
    <h2>Voici un article</h2>
    <p>Un texte de description du contenu de l'article...</p>
  </article>

  <article class="coldstyle">
    <h2 class="whitetitle">Voici un article</h2>
    <p>Un texte de description du contenu de l'article...</p>
  </article>

  <article class="flashstyle">
    <h2>Voici un article</h2>
    <p>Un texte de description du contenu de l'article...</p>
  </article>

  </body>
</html>

```

style.css

```
body, h1, h2 {
  margin: 0;
}

header {
  width: 100%;
  height: 200px;
  text-align: center;
  margin-bottom: 3em;
}

article {
  width: 300px;
  height: 400px;
  display: inline-block;
  margin: 0 2.9em;
}

.headerstyle {
  background-color: #17183b;
  color: #7b7554
}

.coldstyle {
  background-color: #a11692;
}

.flashstyle {
  background-color: #ff4f79;
}

.coldstyle, .flashstyle {
  color: #17183b;
}

.whitetitle {
  color: white;
  text-align: center;
}

```
