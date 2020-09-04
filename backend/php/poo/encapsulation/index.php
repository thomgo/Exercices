<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
require "student.php";
// Instanciate the studen object
$student = new Student();
// Setting attribut's values directly
// $student->name = "Timmy";
// $student->age = 35;

// Using setters to give values to attributs
$student->setName("Timmy");
$student->setAge(35);
var_dump($student);

// Exercice 2
echo "<h2>Exercice 2</h2>";
$student = new Student();
// try to call the setters with values but we do not know yet if they are correct
try {
  $student->setName("a");
  $student->setAge(1250);
}
// If they are not we catch the exception and display the message
catch (\Exception $e) {
  echo $e->getMessage();
}
var_dump($student);

// Exercice 3
echo "<h2>Exercice 3</h2>";
require "book.php";
$data = [
  "title" => "The rain",
  "pages" => 246,
];
// Hydrate the book with the data from the array
$book = new Book($data);
var_dump($book);
// Display a basic sentence using the getters and not the attributs themselves because they are protected
echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages";
