## Reproduire un header

Regardez le header suivant et la manière dont il se transforme sur smartphones, tablettes et pc. Essayez de reproduire la même chose en utilisant le positionnement sur la grille de Bootstrap.

Vous devrez ajouter quelques lignes de CSS pour voir vos éléments HTML et leur mettre de la couleur. N'oubliez pas également d'utiliser les balises sémantiques.

A vous de jouer !

**Smartphones**

![positionnement header smartphone](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533a2a9c6da13f3664541/dbb1e9a3a825e17b1f7773909a7c669a/pos1-smartphone.png)

**Tablette**

![positionnement header tablette](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533a2a9c6da13f3664541/0b5f225ede10846ddcb4436d8001363e/pos1-tablette.png)

**Desktop**

![positionnement header desktop](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533a2a9c6da13f3664541/3794deb75ff5742fb1ed66e5d1cc0a09/pos1-desktop.png)

## Correction

```
<div class="container-fluid mt-2">
          <header class="row">
             <aside class="col-12 col-sm-12 col-lg-4">
                <h2>Voilà un aside</h2>
             </aside>
             <section class="col-12 col-sm-6 col-lg-8">
                <h2>Voilà une section</h2>
             </section>
             <nav class="col-12 col-sm-6 col-lg-12">
                <h2>Voilà une nav</h2>
             </nav>
          </header>
 </div>

```
