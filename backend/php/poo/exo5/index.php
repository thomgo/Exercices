<?php
require "clio.php";

//On instancie plusieurs clios
$clio  = new clio(["doors" => clio::fiveDoors, "color" => clio::colors["green"]]);
$clio2  = new clio(["doors" => clio::threeDoors, "color" => clio::colors["red"]]);

//On affiche la couleur et le prix des deux clios
//Remarquez que les prix sont identiques
echo "<p>" . $clio->getColor() . "</p>";
echo "<p>" . $clio->getPrice() . "</p>";

echo "<p>" . $clio2->getColor() . "</p>";
echo "<p>" . $clio2->getPrice() . "</p>";

//On change l'attribut static prix
clio::setPrice(10000);

//Il change pour toutes les clios instanciées
echo "<p>" . $clio->getPrice() . "</p>";
echo "<p>" . $clio2->getPrice() . "</p>";

 ?>
