<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";
$i = 0;
while ($i <= 9) {
  echo "One run of the loop<br>";
  $i ++;
}

// Exercice 2
echo "<h2>Exercice 2</h2>";
for ($i=0; $i <=9 ; $i++) {
  echo "One run of the loop<br>";
}

// Exercice 3
echo "<h2>Exercice 3</h2>";
// ($i=0; $i <= 100; $i++) for numbers from 0 to 100
// ($i=1; $i <= 99; $i++) for numbers from 1 to 99
for ($i=0; $i <= 100; $i+=2) {
  echo $i . "<br>";
}

// Exercice 4
echo "<h2>Exercice 4</h2>";
for ($i=0; $i <= 100; $i++) {
  if($i%2 === 0) {
    echo $i . " is even<br>";
  }
  else {
    echo $i . " is odd<br>";
  }
}

// Exercice 5
echo "<h2>Exercice 5</h2>";
$items = ["First item", "Second item", "Third item", "Fourth item"];
for ($i=0; $i < 4; $i++) {
  echo $items[$i] . "<br>";
}

// Exercice 6
echo "<h2>Exercice 6</h2>";
$customers = [
  "Albin Term",
  "Anna Sandgrove",
  "John Doe",
  "Terrance Head",
  "Yan Mock",
  "Zoe Durst"
];
echo "List of all customers : <br>";
for ($i=0; $i < 6; $i++) {
  echo $customers[$i] . "<br>";
}

// Exercice 7
echo "<h2>Exercice 7</h2>";
$items = ["First item", "Second item", "Third item", "Fourth item"];
foreach ($items as $key => $value) {
  echo "position $key : " . $value . "<br>";
}

// Exercice 8
echo "<h2>Exercice 8</h2>";
$citizen = [
  "firstname" => "John",
  "lastname" => "Doe",
  "age" => 45,
  "income" => 60000,
  "sexe" => 0
];
echo "Citizen identity : <br>";
foreach ($citizen as $key => $value) {
  if ($key === "sexe") {
    if ($value) {
      echo "$key : female<br>";
    }
    else {
      echo "$key : male<br>";
    }
  }
  else {
    echo "$key : $value<br>";
  }
}

// Exercice 9
echo "<h2>Exercice 9</h2>";
$citizens = [
  [
    "firstname" => "John",
    "lastname" => "Doe"
  ],
  [
    "firstname" => "Anna",
    "lastname" => "Molner"
  ],
  [
    "firstname" => "Harry",
    "lastname" => "Trueman"
  ],
  [
    "firstname" => "Cecile",
    "lastname" => "Mercier"
  ]
];

foreach ($citizens as $key => $citizen) {
  $number = $key + 1;
  echo "Citizen $number<br>";
  foreach ($citizen as $key => $value) {
    echo "$key : $value<br>";
  }
  echo "<br>";
}
