<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";
$items = array();
var_dump($items);
$items = [];
var_dump($items);
// This throw an error
// $items = ();
$items = ["a", "b"];
var_dump($items);

// Exercice 2
echo "<h2>Exercice 2</h2>";
$items = [
  "premier élément",
  "deuxième élément",
  "troisième élément",
  "quatrième élément"
];
var_dump($items);
echo $items[1];
echo $items[3];
echo $items[0];

// Exercice 3
echo "<h2>Exercice 3</h2>";
$player = [
  "John",
  "Doe",
  34,
  TRUE
];
echo $player[0];
echo $player[1];
echo $player[0] . $player[1];
echo $player [2];
echo $player[3];

// Exercice 4
echo "<h2>Exercice 4</h2>";
$player = [
  "firstname" => "John",
  "lastname" => "Doe",
  "age" => 34,
  "isAdult" => TRUE
];
echo $player["firstname"];
echo $player["lastname"];
echo $player["firstname"] . $player["lastname"];
echo $player ["age"];
echo $player["isAdult"];

// Exercice 5
echo "<h2>Exercice 5</h2>";
$car = [
  "type" => "Clio",
  "brand" => "Renault",
  "date" => 2006,
  "color" => "orange",
  "passengers" => ["Mike", "Claire", "Anna", "Louis"]
];

echo "Une " . $car["brand"] . " " . $car["type"] . " de couleur " . $car["color"]
. ", modèle " . $car["date"] . " a été aperçue avec à son bord 4 passagers";

echo $car["passengers"][0];

echo "4 individus ont été aperçus à son bord : "
. $car["passengers"][3] . ", "
. $car["passengers"][1] . ", "
. $car["passengers"][0] . " et "
. $car["passengers"][2];

// Exercice 6
echo "<h2>Exercice 6</h2>";
$a = 14;
$b = 38;
$product = [];
var_dump($a,$b,$product);

$product["price"] = $a;
var_dump($product);

$product["price"] = $b;
var_dump($product);
