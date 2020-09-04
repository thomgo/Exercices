<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";

if (TRUE) {
  echo "Condition is working !";
}

if (FALSE) {
  echo "Condition is working !";
}
else {
  echo "Condition is not working !";
}

if (FALSE === FALSE) {
  echo "Condition is working !";
}

// Exercice 2
echo "<h2>Exercice 2</h2>";
$content = 123; // or TRUE or FALSE or "texte"
if ($content) {
  echo "Condition is OK";
}
else {
  echo "Condition is KO";
}

// Exercice 3
echo "<h2>Exercice 3</h2>";
$price = 45; // or "45" or "forty five"

if ($price === 45) {
  echo "The price is an int";
}
elseif ($price == 45) {
  echo "The price is a string";
}
else {
  echo "The price is something else";
}

// Exercice 4
echo "<h2>Exercice 4</h2>";
$age = 25;
if ($age >= 18) {
  echo "Entry allowed";
}
else {
  echo "Entry not allowed";
}

// Exercice 5
echo "<h2>Exercice 5</h2>";
$store = ["Walmart", "Colorado", "South-Park", 483,];

if ($store[0] === "Walmart" && $store[2] === "South-Park") {
  echo "The Walmart in South-Park has " . $store[3] . " employes";
}
elseif ($store[0] === "Walmart" && $store[1] === "Colorado") {
  echo "Hum this is an other Walmart from Colorado";
}
elseif($store[0] === "Walmart") {
  echo "Too bad this is just a Walmart";
}
else {
  echo "I do not know what this is";
}

// Exercice 6
echo "<h2>Exercice 6</h2>";
$student = [
  "Name" => "John Doe",
  "Grade" => 14
];
if ($student["Grade"] < 10) {
  echo "Recalé";
}
elseif ($student["Grade"] < 12) {
  echo "Passable";
}
elseif ($student["Grade"] < 14) {
  echo "Moyen";
}
elseif ($student["Grade"] < 16) {
  echo "Bien";
}
else {
  echo "Très bien";
}

// Exercice 7
echo "<h2>Exercice 7</h2>";
$meal = [
  "foodType" => "meat",
  "cookedAt" => 80,
  "temperature" => 60
];
if ($meal["temperature"] < $meal["cookedAt"]) {
  $meal["status"] = "Uncooked";
}
elseif ($meal["temperature"] === $meal["cookedAt"]) {
  $meal["status"] = "Cooked";
}
else {
  $meal["status"] = "Overcooked";
}
echo $meal["status"];

// Exercice 8
echo "<h2>Exercice 8</h2>";
$number = 42;
if ($number > 0) {
  if($number%2 === 0) {
    echo "$number is even";
  }
  else {
    echo "$number is odd";
  }
}
else {
  echo "Please enter a number at least greater than 0";
}
