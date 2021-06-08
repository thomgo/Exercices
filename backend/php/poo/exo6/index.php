<?php
//On charge les fichier nécessaires
require "model/db.php";
require "model/entity/cat.php";
require "model/catManager.php";

//On instancie le manager qui va nous permettre de gérer la table
$catManager = new catManager();

//On vérifie qu'un formulaire a été soumis
if(!empty($_POST)) {
  //On instancie un objet chat avec les données du formulaire
  $cat = new Cat($_POST);
  //On ajoute l'objet chat en base de données
  $catManager->addCat($cat);
}

//On récupère un tableau contenant des objets chat pour l'afficher dans la vue
$cats = $catManager->getCats();

require "view/indexView.php";
 ?>
