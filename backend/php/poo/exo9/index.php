<?php

require "vehicule.php";
require "bus.php";
require "voiture.php";

//On instancie une voiture
$voiture = new voiture([
  "immatriculation" =>"f4f5f1v",
  "couleur" => "rouge",
  "portes" => "5"
]);

//On instancie un bus
$bus = new bus([
  "immatriculation" =>"152sff41",
  "couleur" => "bleu",
  "etages" => "2"
]);

//On affiche les propriétés de la voiture
echo "<p>" . $voiture->getImmatriculation() . "</p>";
echo "<p>" . $voiture->getCouleur() . "</p>";
echo "<p>" . $voiture->getPortes() . "</p>";
//On affiche les propriétés du bus
echo "<p>" . $bus->getImmatriculation() . "</p>";
echo "<p>" . $bus->getCouleur() . "</p>";
echo "<p>" . $bus->getEtages() . "</p>";

//On modifie des valeurs
$voiture->setCouleur("gris");
$bus->setEtages(1);

//On affiche ces valeurs
echo "<p>" . $voiture->getCouleur() . "</p>";
echo "<p>" . $bus->getEtages() . "</p>";

 ?>
