<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";
$random_int = rand();
echo $random_int . "<br>";
$random_int = rand(0,10);
echo $random_int . "<br>";

// Exercice 2
echo "<h2>Exercice 2</h2>";
$number = 12.8;
echo $number . "<br>";
$number = round($number);
echo $number . "<br>";

$number = 12.3;
echo $number . "<br>";
$number = round($number);
echo $number . "<br>";

$number = 12.5;
echo $number . "<br>";
$number = round($number);
echo $number . "<br>";

$number = 12.42359;
echo $number . "<br>";
$number = round($number, 2);
echo $number . "<br>";

// Exercice 3
echo "<h2>Exercice 3</h2>";
$age = "35";
var_dump($age);
$age = intval($age);
var_dump($age);

// Exercice 4
echo "<h2>Exercice 4</h2>";
$texte = "Some random content to test the strlen function";
$maxLength = 20;
if (strlen($texte) > $maxLength) {
  echo "Your texte is too long";
}
else {
  echo "OK";
}

// Exercice 5
echo "<h2>Exercice 5</h2>";
$texte = "A nice boat";
var_dump($texte);
echo "<br>";
$letters = str_split($texte);
var_dump($letters);
echo "<br>";
$words = explode(" ", $texte);
var_dump($words);

// Exercice 6
echo "<h2>Exercice 6</h2>";
$name = "Paul Dumas";
$expectedName = "paul dumas";

if (strtolower($name) === $expectedName) {
  echo "OK Paul you can come in";
}
else {
  echo "We do not know you";
}

// Exercice 7
echo "<h2>Exercice 7</h2>";
$newStudent = "Ryan Oper";
$students = ["John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner"];

array_push($students, $newStudent);
var_dump($students);
array_push($students, "Franck Martin", "Tom Hawkins");
var_dump($students);

// Exercice 8
echo "<h2>Exercice 8</h2>";
$transactions = [102, 50, 4563, 42, 78, 146, 10563];
$researched = 42;

var_dump(in_array($researched, $transactions));

if (in_array($researched, $transactions)) {
  echo "We found a matching transaction";
}
else {
  echo "No match";
}

// Exercice 9
echo "<h2>Exercice 9</h2>";
$students = ["John Doe", "Jane Doe", "Marc Alm", "Jimmy Turner"];
var_dump($students);
sort($students);
var_dump($students);

echo "<br>" . end($students);
echo "<br>" . $students[count($students)-1];
echo "<br>" . array_pop($students);
