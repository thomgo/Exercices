<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
// We store the data in variables with meaningfull names
$shoes = 70;
$jean = 59;
$tshirt = 20;
$reduction = 20;

// First we calculate the total amount without the reduction
$amount = $shoes + $jean + $tshirt;
// Then we apply the reduction
$finalAmount = $amount * (1-($reduction/100));
echo $finalAmount;

// Exercice 2
echo "<h2>Exercice 2</h2>";
// The loop iterate from 1 to 100, 2 by 2
// This makes the loop only going trough odd numbers
for ($i=1; $i <= 100 ; $i+=2) {
  // If the current number divided by 3 gives a rest of 0 it is a multiple of 3
  if ($i%3 === 0) {
    echo $i . "<br>";
  }
}

// Exercice 3
echo "<h2>Exercice 3</h2>";
// The base array simulating values from a form on the website
$user = [
  "lastname" => "Doe",
  "firstname" => "John",
  "nickname" => "",
  "age" => "42",
  "hobby" => "",
  "sport" => ""
];

// Loop trough each key and valeur of the user array
foreach ($user as $key => $value) {
  // Instead of empty fonction we could use a comparaison like: $value === ""
  if (empty($value)) {
    // Replace the value at the matching key by the sentence
    $user[$key] = "No information provided";
  }
}

var_dump($user);

// Exercice 4
echo "<h2>Exercice 4</h2>";
$texte = "B0nj0ur les n0uveau, démarr0ns la pr0grammati0n";
print $texte . "<br>";
$texte = str_replace("0", "o", $texte);
print $texte;

// Exercice 5
echo "<h2>Exercice 5</h2>";

// Simple version of the function
function addDash(string $texte, int $space=5):string
{
  // The result must be a string so we initialize a string
  $result = "";
  // Add a dash to the string each time this is required
  for ($i=0; $i < $space; $i++) {
    $result .= "-";
  }
  // Return the dashes and the texte after
  return $result . $texte;
}
echo addDash("test", 10);

// Harder version of the function
function harderAddDash(string $texte, int $space=5):string
{
  $result = "";
  // Add a dash or an asterisk based on the type of number (odd or even)
  for ($i=0; $i < $space; $i++) {
    if ($i%2===0) {
      $result .= "*";
    } else {
      $result .= "-";
    }
  }
  // Return the dashes and the texte after
  return $result . $texte;
}
echo harderAddDash("test", 10);
