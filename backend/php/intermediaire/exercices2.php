<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
$numbers = [4, 15, 2, 145, 42, 5, 78, 12];
// By default we assume that the first entry is the highest
$result = $numbers[0];
// We check for each number if it is superior. If so it becomes $result new value.
foreach ($numbers as $number) {
  if ($number > $result) {
    $result = $number;
  }
}
echo $result;


// Exercice 2
echo "<h2>Exercice 2</h2>";
function fillingTime(int $length, int $width, int $deepth, int $filling): int {
  $volume = $length*$width*$deepth;
  $fillingTime = $volume/$filling;
  return $fillingTime;
}
$fillingTime = fillingTime(8, 4, 3, 2);
echo "Filling time of your swimming pool : $fillingTime min";

// Exercice 3
echo "<h2>Exercice 3</h2>";
// For both functions we use the pi() function to get the value of pi
function circlePerimeter(int $r): float {
  $perimeter = 2 * pi() * $r;
  return round($perimeter, 2);
}

function circleArea(int $r): float {
  $area = ($r*$r) * pi();
  return round($area, 2);
}

echo "With r=5cm the perimeter is : " . circlePerimeter(5) . " cm<br>";
echo "With r=5cm the area is : " . circleArea(5) . " cm<br>";

// Exercice 4
echo "<h2>Exercice 4</h2>";
// At first our pyramide is an empty string
$pyramide = "";
// It needs 5 floors so the loop runs five times
for ($i=0; $i < 5; $i++) {
  // We add an * and echo the current content
  $pyramide .= "*";
  echo $pyramide . "<br>";
}

// Exercice 5
echo "<h2>Exercice 5</h2>";
// Loop to get numbers from 1 to 100
for ($i=1; $i <= 100 ; $i++) {
  // Check for each multiple and echo the right value
  if ($i%15 === 0) {
    echo "FIZZ BUZZ";
  }
  elseif ($i%5 === 0) {
    echo "BUZZ";
  }
  elseif ($i%3 === 0) {
    echo "FIZZ";
  }else {
    echo $i;
  }
  echo "<br>";
}
