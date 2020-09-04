<?php
//On charge les fichier nécessaires
require "db.php";
require "chat.php";
require "chatManager.php";

//On instancie le manager qui va nous permettre de gérer la table
$chatManager = new chatManager();

//On vérifie qu'un formulaire a été soumis
if(!empty($_POST)) {
  //On instancie un objet chat avec les données du formulaire
  $chat = new chat($_POST);
  //On ajoute l'objet chat en base de données
  $chatManager->addCat($chat);
}

//On récupère un tableau contenant des objets chat pour l'afficher dans la vue
$chats = $chatManager->getCats();

require "indexView.php";
 ?>
