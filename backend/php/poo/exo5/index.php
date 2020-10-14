<?php
require "Clio.php";

//On instancie plusieurs Clios
$clio  = new Clio(["doors" => Clio::fiveDoors, "color" => Clio::colors["green"]]);
$clio2  = new Clio(["doors" => Clio::threeDoors, "color" => Clio::colors["red"]]);

//On affiche la couleur et le prix des deux Clios
//Remarquez que les prix sont identiques
echo "<p>" . $clio->getColor() . "</p>";
echo "<p>" . $clio->getPrice() . "</p>";

echo "<p>" . $clio2->getColor() . "</p>";
echo "<p>" . $clio2->getPrice() . "</p>";

//On change l'attribut static prix
Clio::setPrice(10000);

//Il change pour toutes les Clios instanciées
echo "<p>" . $clio->getPrice() . "</p>";
echo "<p>" . $clio2->getPrice() . "</p>";

 ?>
