<?php

// Exercice 1
echo "<h2>Exercice 1</h2>";
function product(int $a, int $b): int {
  return $a*$b;
}
$result = product(4, 30);
echo "The result of the function is : $result";

// Exercice 2
echo "<h2>Exercice 2</h2>";
function showDigits() {
  for ($i=0; $i <=9 ; $i++) {
    echo $i;
  }
}

showDigits();

// Exercice 3
echo "<h2>Exercice 3</h2>";
function welcome($firstname="John", $lastname="Doe") {
  echo "Welcome to our site $firstname $lastname";
}

welcome();

// Exercice 4
echo "<h2>Exercice 4</h2>";
function isAdult(int $age=false): boolean {
  if($age){
    return ($age >= 18) ? true : false;
  }
  return false;
}

if (isAdult(27)) {
  echo "Welcome to the site";;
}

// Exercice 5
echo "<h2>Exercice 5</h2>";
function birthYear($age=false) {
  if ($age) {
    return date("Y") - $age;
  }
  return "No age given";
  // Ternary version
  // return $age ? date("Y") - $age : "No age given";
}

echo birthYear(45);

// Exercice 6
echo "<h2>Exercice 6</h2>";
$user = [
  "firstname" => "John",
  "lastname" => "Doe",
  "age" => 42,
  "job" => "dev",
];

function identityCard(array $user): string {
  $identityCard = "";
  foreach ($user as $key => $value) {
    $identityCard .= "$key : $value <br>";
  }
  return $identityCard;
}

echo identityCard($user);
