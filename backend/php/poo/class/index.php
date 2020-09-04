<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
// Add the content of dog.php file in index.php
require "dog.php";
// Create two instances of the Dog class
$dog1 = new Dog();
$dog2 = new Dog();
// Store the $dog2 object in the $dog3 variable but they both reference to the same object
$dog3 = $dog2;

var_dump($dog1);
var_dump($dog2);
var_dump($dog3);

// Exercice 2
echo "<h2>Exercice 2</h2>";
require "customer.php";
$customer = new Customer();
// $customer store an empty object
var_dump($customer);
// Add one attribut name containing a string with walue Doe
$customer->name = "Doe";
var_dump($customer);
// Add other attributs
$customer->firstname = "John";
$customer->age = 42;
$customer->payments = ["visa", "mastercard", "paypal"];
var_dump($customer);
// Create a blank new instance of the Customer class without the previous attributs
$customer2 = new Customer();
var_dump($customer2);

$customer->dog = $dog1;
var_dump($customer);
