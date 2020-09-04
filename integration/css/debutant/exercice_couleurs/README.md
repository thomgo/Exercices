# Consigne

Dans cette exercice, vous allez apprendre à utiliser les couleurs en CSS. Fini les pages tristes et mornes en noir et blanc !

Votre mission si vous l'acceptez est de réaliser les actions suivantes :

- Ecrivez un paragraphe de texte, le texte sera écrit en blanc sur fond noir.

- Créez deux sections contenant chacune un titre de niveau 2, le texte sera écrit en blanc anthracite sur fond bleu mer. Vos sections feront la largeur de l'écran et 200px de haut

- Créez un article qui contient une section qui contient un paragraphe avec du texte. L'article sera de fond vert d'eau, la section sera de fond gris-vert, le paragraphe sera de fond kaki et texte vert olive. Votre article fera 500px sur 300 et la section 250*150

L'important dans cet exercice n'est pas de respecter les couleurs indiquées, mais de vous obliger à les varier et à utiliser différentes formes de notation.

Voilà par exemple le résultat que vous pourriez obtenir :

![résultat exercice sur les couleurs](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58808f8ffbd28a6b9daca4e9/24c93d92606df393004fe4caea618fd3/exercice_couleurs.png)

# Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les couleurs en CSS</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <p>Voilà notre premier paragraphe</p>

  <section>
    <h2>Titre deux</h2>
  </section>

  <section>
    <h2>Titre deux</h2>
  </section>

  <article>
    <section>
      <p>Voilà du texte en couleur pour remplir notre article</p>
    </section>
  </article>

  </body>
</html>

```

style.css

```
body {
  margin: 0;
}

p {
  background-color: black;
  color: white;
}

section {
  width: 100%;
  height: 200px;
  background-color: #05668d;
}

h2 {
  color: #ebf2fa;
}

article {
  background-color: #7ebc89;
  width: 500px;
  height: 300px;
}

article section {
  background-color: #c1dbb3;
  width: 250px;
  height: 150px;
}

article p {
  background-color: #679436;
  color: #a5be00;
}

```
