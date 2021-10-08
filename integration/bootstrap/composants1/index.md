## Composer une page d'accueil

Dans cet exercice, nous allons composer une page d'accueil classique pour un site internet uniquement avec des composants Bootstrap. Bien évidemment le résultat final ne sera pas encore parfait, mais l'objectif est de vous montrer que l'on peut avoir une architecture basique, uniquement avec ce que nous propose Bootstrap.

Testez déjà ce premier jet en responsive, vous verrez que de base il est déjà quasiment adapté a plusieurs tailles d'aparreils.

Conservez bien le résultat de votre exercice car nous l'améliorerons ensuite dans les exercices sur les classes utilitaires.

Sur notre page d'accueil, nous allons trouver :

- un header

- une navigation

- un slider

- des articles sous forme de cartes

- un footer avec une mention légale

Votre résultat devrait ressembler à ça :

![résultat page avec composants Bootstrap](https://trello-attachments.s3.amazonaws.com/5859370f5e4809987f4007d2/58d533b60fe6361d3635c829/7f52e7f99ada7be14d1e5b6767546090/composants-1.png)

## Correction

```
  <!-- Start of the jumbotron -->

        <header class="jumbotron jumbotron-fluid">
          <section class="container">
            <h1 class="display-3">Les composants</h1>
            <p class="lead">Voilà une page avec des composants, nous y ajouterons bientôt des classes utilitaires</p>
          </section>
        </header>


        <!-- Start of the navbar -->

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Accueil</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Lien1<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lien2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Lien 3 désactivé</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>

        <!-- Start of the main container -->

        <div class="container">

<!-- Slider -->

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/lille_large.jpg" alt="First slide">
                <section class="carousel-caption d-none d-md-block">
                  <h3>Un carousel</h3>
                  <p>Avec du texte</p>
                </section>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/lille_large.jpg" alt="Second slide">
                <section class="carousel-caption d-none d-md-block">
                  <h3>Un carousel</h3>
                  <p>Avec du texte</p>
                </section>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/lille_large.jpg" alt="Third slide">
                <section class="carousel-caption d-none d-md-block">
                  <h3>Un carousel</h3>
                  <p>Avec du texte</p>
                </section>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

<!-- Card content -->

          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem;">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem;">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem;">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <article class="card" style="width: 20rem;">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </article>
            </div>

          </div>
        </div>

        <!-- Footer -->

        <footer class="jumbotron jumbotron-fluid">
          <div class="container">
            <p class="lead">Un site réalisé avec Bootstrap. 2017 Tous droits réservés</p>
          </div>
        </footer>


```
