<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
require "bird.php";
// Instanciate a Bird object
$bird = new Bird();
// Give values to attributs;
$bird->type = "sparrow";
$bird->color = "grey";
$bird->age = 5;
$bird->areas = ["europe", "north america", "asia"];
var_dump($bird);
// Call the sing method
$bird->sing();
// Call the fly method with Paris as an argument
echo "<br>" . $bird->fly("Paris");

// Exercice 2
echo "<h2>Exercice 2</h2>";
require "otherBird.php";
// Instanciate an object with its values
$otherBird = new OtherBird("sparrow", "white", 2, ["europe", "north america", "asia"]);
var_dump($otherBird);

// $data = [
//   "type" => "sparrow",
//   "color" => "white",
//   "age" => 2,
//   "areas" => ["europe", "north america", "asia"],
// ];
// $otherBird = new OtherBird($data);
// var_dump($otherBird);
