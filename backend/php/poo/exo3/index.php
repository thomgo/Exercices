<?php

require "person.php";

$person = new Person([
  "lastName" => "Dupont",
  "firstName" => "Jean",
  "adress" => "31 rue du puit, Caen"
]);

echo $person->getCoord();

 ?>
