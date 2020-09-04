# Consignes

Il est temps de mettre en pratique ce que vous savez des sélecteurs. Pour cet exercice, vous allez réaliser une page web très basique, similaire à la première mais vous allez être beaucoup plus précis dans vos sélections.

Vous rendrez :

- un fichier style.css

Vous disposez déjà d'une structure HTML basique. Votre objectif est d'obtenir un rendu le plus similaire possible à cette capture d'écran en écrivant le moins de lignes de code possible.

![les sélecteurs css](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/587cc0ee622b48f01ba27643/c28b702da41fafd5898acb4f05c1739c/selecteurs_css.png)

Vous n'avez pas le droit de modifier la structure html, vous devrez donc utiliser les sélecteurs que nous venons de voir. Nous avons déjà abordé la plupart des propriétés utilisées mais vous devrez peut-être aller en chercher certaines dans la documentation.

## Correction

index.html

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les sélecteurs CSS</title>
   <link rel="stylesheet" href="style.css">
  </head>

  <body>

<!-- Header  -->
    <header>
      <h1>Travailler les sélecteurs en CSS</h1>
      <h2>Aller plus loin avec les sélecteurs</h2>
      <p>Voilà du texte qui se trouve dans le header <span>c'est important</span></p>
    </header>

<!-- Main content -->
    <section>
      <h2>Titre 2</h2>
      <p class="usual">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu pretium,
        tincidunt quam id, tempus ante. Vivamus mattis venenatis sapien at sodales. Curabitur in vulputate eros. Nam finibus ante tellus, et vestibulum nibh molestie ut. Duis dictum nibh hendrerit est iaculis euismod. Donec ornare, ligula quis mattis ullamcorper, eros est interdum est, in vulputate orci nisl in tortor. Pellentesque rutrum egestas arcu sed scelerisque. Proin ultrices dui libero, in consectetur felis euismod ac. Mauris dictum tincidunt lorem, nec sodales justo tempor in. Cras metus eros, hendrerit in bibendum rutrum, vehicula nec ligula. Maecenas nec sollicitudin mauris. Donec consequat et ipsum nec laoreet. Duis tincidunt,
        nisl vel suscipit aliquam, sem purus accumsan lectus, <span>ac viverra mauris nibh quis velit<span>.</p>

      <h2>Titre 2</h2>
      <p class="usual">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu pretium,
        tincidunt quam id, tempus ante. Vivamus mattis venenatis sapien at sodales. Curabitur in vulputate eros. Nam finibus ante tellus, et vestibulum nibh molestie ut. Duis dictum nibh hendrerit est iaculis euismod. Donec ornare, ligula quis mattis ullamcorper, eros est interdum est, in vulputate orci nisl in tortor. Pellentesque rutrum egestas arcu sed scelerisque. Proin ultrices dui libero, in consectetur felis euismod ac. Mauris dictum tincidunt lorem, nec sodales justo tempor in. Cras metus eros, hendrerit in bibendum rutrum, vehicula nec ligula. Maecenas nec sollicitudin mauris. Donec consequat et ipsum nec laoreet. Duis tincidunt,
        nisl vel suscipit aliquam, sem purus accumsan lectus, <span>ac viverra mauris nibh quis velit<span>.</p>

      <h2>Titre 2</h2>
      <p class="danger">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu pretium,
        tincidunt quam id, tempus ante. Vivamus mattis venenatis sapien at sodales. Curabitur in vulputate eros. Nam finibus ante tellus, et vestibulum nibh molestie ut. Duis dictum nibh hendrerit est iaculis euismod. Donec ornare, ligula quis mattis ullamcorper, eros est interdum est, in vulputate orci nisl in tortor. Pellentesque rutrum egestas arcu sed scelerisque. Proin ultrices dui libero, in consectetur felis euismod ac. Mauris dictum tincidunt lorem, nec sodales justo tempor in. Cras metus eros, hendrerit in bibendum rutrum, vehicula nec ligula. Maecenas nec sollicitudin mauris. Donec consequat et ipsum nec laoreet. Duis tincidunt,
        nisl vel suscipit aliquam, sem purus accumsan lectus, <span>ac viverra mauris nibh quis velit<span>.</p>

      <h2 id="lasttitle">Titre 2</h2>
      <p class="danger">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet arcu pretium,
        tincidunt quam id, tempus ante. Vivamus mattis venenatis sapien at sodales. Curabitur in vulputate eros. Nam finibus ante tellus, et vestibulum nibh molestie ut. Duis dictum nibh hendrerit est iaculis euismod. Donec ornare, ligula quis mattis ullamcorper, eros est interdum est, in vulputate orci nisl in tortor. Pellentesque rutrum egestas arcu sed scelerisque. Proin ultrices dui libero, in consectetur felis euismod ac. Mauris dictum tincidunt lorem, nec sodales justo tempor in. Cras metus eros, hendrerit in bibendum rutrum, vehicula nec ligula. Maecenas nec sollicitudin mauris. Donec consequat et ipsum nec laoreet. Duis tincidunt,
        nisl vel suscipit aliquam, sem purus accumsan lectus, <span>ac viverra mauris nibh quis velit<span>.</p>
    </section>

  </body>
</html>


```

style.css

```
/*Common rules*/

h1, .danger {
  font-weight: bold;
}

h1, h2, header p {
  text-align: center;
}

#lasttitle, header p span {
  text-decoration: underline;
}

/*Specific rules*/

p {
  font-style: italic;
}

p span {
  text-decoration: line-through;
}

header h2 {
  text-align: right;
}

header p {
  font-style: normal;
  font-size: 0.8em;
}

.usual {
  line-height: 2;
}

```
