<?php
require "Clio.php";

//On instancie plusieurs Clios
$clio  = new Clio(["doors" => Clio::FIVEDOORS, "color" => Clio::COLORS["green"]]);
$clio2  = new Clio(["doors" => Clio::THREEDOORS, "color" => Clio::COLORS["red"]]);

//On affiche la couleur et le prix des deux Clios
//Remarquez que les prix sont identiques
echo "<p>Couleur clio : " . $clio->getColor() . "</p>";
echo "<p>Prix clio : " . $clio->getPrice() . "</p>";

echo "<p>Couleur clio 2 : " . $clio2->getColor() . "</p>";
echo "<p>Prix clio 2 : " . $clio2->getPrice() . "</p>";

//On change l'attribut static prix
Clio::setPrice(10000);

//Il change pour toutes les Clios instanciées
echo "<p>Prix clio : " . $clio->getPrice() . "</p>";
echo "<p>Prix clio 2 : " . $clio2->getPrice() . "</p>";

 ?>
