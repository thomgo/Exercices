# Consigne

Vous commencez à vous sentir un peu plus à l'aise avec les sélecteurs ? Jonglons encore un peu avec eux jusqu'à ce que vous puissiez sélectionner n'importe quel élément sur votre page comme un pro !

Commencez d'abord par créer un fichier index.html, ce fichier contiendra, dans l'ordre suivant :

- Deux paragraphes de classe "first" avec du texte de remplissage et un lien

- Une liste non-ordonnée avec 5 items contenant chacun un lien. Le dernier lien portera l'id "last"

- Deux paragraphe de classe "second" avec du texte de remplissage et un lien

Vous appliquerez les styles suivants :

- La police de tous vos paragraphes fera 18px et celle de vos liens 22px

- Les éléments de classe "first" seront alignés aux centre

- Les éléments de classe "second" seront alignés à droite

- Tous les liens qui se trouve dans des paragraphes seront en italique

- Tous les a dans une liste seront en gras

- L'élément portant l'id "last" sera barré

Voici le résultat que vous devriez obtenir :

![résultat exercice sélecteurs bis](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/5885d039b5230c51d38acf09/1451e2d9ecc034b535e302616590f635/exercice_selecteursbis.png)

# Correction

index.html :

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encore des sélecteurs</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>
    <p class="first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus vitae arcu ultricies molestie vitae et
      metus. Aenean sed leo sit amet velit vehicula ultricies. Sed libero sem, sodales quis volutpat vel, blandit sed
      ipsum. Maecenas vel ex pretium, vulputate risus at, accumsan orci. Suspendisse vehicula, tellus ut aliquam
      bibendum, mauris risus pulvinar ante, quis feugiat est quam ut ipsum. Mauris blandit accumsan tortor, nec
      finibus nulla dignissim ac. Proin odio risus, viverra a libero in, hendrerit commodo libero. Vivamus nec cursus
      ante. Nam id tempus risus, id pellentesque nisl. <a href="#">Un lien vers un autres site</a></p>

    <p class="first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus vitae arcu ultricies molestie vitae et
      metus. Aenean sed leo sit amet velit vehicula ultricies. Sed libero sem, sodales quis volutpat vel, blandit sed
      ipsum. Maecenas vel ex pretium, vulputate risus at, accumsan orci. Suspendisse vehicula, tellus ut aliquam
      bibendum, mauris risus pulvinar ante, quis feugiat est quam ut ipsum. Mauris blandit accumsan tortor, nec
      finibus nulla dignissim ac. Proin odio risus, viverra a libero in, hendrerit commodo libero. Vivamus nec cursus
      ante. Nam id tempus risus, id pellentesque nisl. <a href="#">Un lien vers un autres site</a></p>

        <ul>
          <li><a href="#">Lien dans une liste</a></li>
          <li><a href="#">Lien dans une liste</a></li>
          <li><a href="#">Lien dans une liste</a></li>
          <li><a href="#">Lien dans une liste</a></li>
          <li><a href="#" id="last">Lien dans une liste</a></li>
        </ul>

        <p class="second">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus vitae arcu ultricies molestie vitae et
          metus. Aenean sed leo sit amet velit vehicula ultricies. Sed libero sem, sodales quis volutpat vel, blandit sed
          ipsum. Maecenas vel ex pretium, vulputate risus at, accumsan orci. Suspendisse vehicula, tellus ut aliquam
          bibendum, mauris risus pulvinar ante, quis feugiat est quam ut ipsum. Mauris blandit accumsan tortor, nec
          finibus nulla dignissim ac. Proin odio risus, viverra a libero in, hendrerit commodo libero. Vivamus nec cursus
          ante. Nam id tempus risus, id pellentesque nisl. <a href="#">Un lien vers un autres site</a></p>

        <p class="second">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus vitae arcu ultricies molestie vitae et
          metus. Aenean sed leo sit amet velit vehicula ultricies. Sed libero sem, sodales quis volutpat vel, blandit sed
          ipsum. Maecenas vel ex pretium, vulputate risus at, accumsan orci. Suspendisse vehicula, tellus ut aliquam
          bibendum, mauris risus pulvinar ante, quis feugiat est quam ut ipsum. Mauris blandit accumsan tortor, nec
          finibus nulla dignissim ac. Proin odio risus, viverra a libero in, hendrerit commodo libero. Vivamus nec cursus
          ante. Nam id tempus risus, id pellentesque nisl. <a href="#">Un lien vers un autres site</a></p>

  </body>
</html>

```
Style.css

```
body {
  margin: 0;
}

p {
  font-size: 18px;
}

a {
  font-size: 22px;
}

.first {
  text-align: center;
}

.second {
  text-align: right;
}

p a {
  font-style: italic;
}

li a {
  font-weight: bold;
}

#last {
  text-decoration: line-through;
}

```
