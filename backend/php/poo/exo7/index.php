<?php
require "personne.php";
require "client.php";
require "electeur.php";

//On instancie un client
$client = new client([
  "nom" => "Quertein",
  "prenom" => "Jean",
  "adresse" => "36 rue du clocher Sainghin"
]);

//On affiche les coordonées du client
$client->getCoord();

//On instancie un électeur
$electeur = new electeur([
  "nom" => "Quertein",
  "prenom" => "Jean",
  "bureau" => "Wasquehal centre"
]);

//On fait voter l'électeur une première fois
$electeur->aVoter();
//On essaie de le faire voter une deuxième fois
$electeur->aVoter();

 ?>
