<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";
echo 15*26;
$result = 15*26;
echo $result;
$a = 15;
$b = 26;
$result = $a * $b;
echo $result;

// Exercice 2
echo "<h2>Exercice 2</h2>";
$result = 78+9-15;
echo $result;
$result = 78*9-15;
echo $result;
$result = 78*(9-15);
echo $result;
$result = 9/15;
echo $result;

// Exercice 3
echo "<h2>Exercice 3</h2>";
$result = 5e3;
echo $result;
$result = 5e6;
echo $result;
$result = 5/0;
echo $result;
$result = 0/0;
echo $result;

// Exercice 4
echo "<h2>Exercice 4</h2>";
$amount = 150;
$amount = $amount + 10;
echo $amount;

// Exercice 5
echo "<h2>Exercice 5</h2>";
$price = 48;
$price = $price + 1;
echo $price;
$price = $price -1;
echo $price;
$price += 1;
echo $price;
$price -= 1;
echo $price;
$price ++;
echo $price;
$price --;
echo $price;

// Exercice 6
echo "<h2>Exercice 6</h2>";
$word = "car";
var_dump($word = "car");
var_dump($word === "car");
var_dump($word = "bus");
var_dump($word === "car");
var_dump($word !== "car");

// Exercice 7
echo "<h2>Exercice 7</h2>";
$userAge = "42";
var_dump($userAge === "42");
var_dump($userAge === 42);
var_dump($userAge == 42);

// Exercice 8
echo "<h2>Exercice 8</h2>";
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName;

// Exercice 9
echo "<h2>Exercice 9</h2>";
$a = "d";
$b = "a";
$c = "b";
$d = "c";
$alphabet = $b . $c . $d . $a;
echo $alphabet;

// Exercice 10
echo "<h2>Exercice 10</h2>";
$name = "Maggie";
echo "Hello $name";
echo 'Hello $name';
