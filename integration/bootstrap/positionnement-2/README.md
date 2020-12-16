## Reproduire le positionnement d'un blog

Les schémas suivants représentent le positonnement de différents articles sur un blog. regardez la manière dont ils se transforment sur smartphones, tablettes et pc. Essayez de reproduire la même chose en utilisant le positionnement sur la grille de Bootstrap.

Vous devrez ajouter quelques lignes de CSS pour voir vos éléments HTML et leur mettre de la couleur. N'oubliez pas également d'utiliser les balises sémantiques.

A vous de jouer !

**Smartphones**

![positionnement articles smartphone](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533aa61e119827143dd03/7dc36a1be17add57831e910c5bd9d60a/pos2-smartphone.png)

**Tablettes**

![positionnement articles tablette](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533aa61e119827143dd03/93bf55fcd63b69a6aa88d5fa3ec71b7b/pos2-tablet.png)

**Desktop**

![positionnement articles desktop](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533aa61e119827143dd03/ad31d604fd583ccbd538ddd72fc4bde1/pos2-desktop.png)

## Correction

```
        <div class="container-fluid">
          <div class="row">
            <!-- Aside -->
            <aside class="col-12 col-sm-4">
              <div class="row">
               <div class="col-4 col-sm-12">
                 <article>
                  <h2>1</h2>
                 </article>
               </div>
               <div class="col-4 col-sm-12">
                 <article>
                  <h2>2</h2>
                 </article>
               </div>
               <div class="col-4 col-sm-12">
                 <article>
                  <h2>3</h2>
                 </article>
               </div>
              </div>
            </aside>
            <!-- section -->
            <section class="col-12 col-sm-8">
              <div class="row">
              <div class="col-12 col-sm-8 offset-sm-2 offset-lg-0 col-lg-4">
                <article>
                 <h2>Voilà du texte</h2>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <article>
                 <h2>Voilà du texte</h2>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <article>
                 <h2>Voilà du texte</h2>
                </article>
              </div>
              </div>
            </section>

          </div>
        </div>

```
