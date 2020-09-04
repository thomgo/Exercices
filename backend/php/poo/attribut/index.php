<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";
require "customer.php";
$customer = new Customer();
var_dump($customer);
$customer2 = new Customer;
var_dump($customer2);

// Set a value to the attributs
$customer->name = "Doe";
$customer->firstname = "John";
$customer->age = 42;
$customer->payments = ["visa", "mastercard", "paypal"];
var_dump($customer);

// Exercice 2
echo "<h2>Exercice 2</h2>";
// Change the values in the attributs using regular fonctions
$customer->name = strtoupper($customer->name);
$customer->firstname = strtoupper($customer->firstname);
$customer->payments[] = "cash";
var_dump($customer);

// Display the data as if using regular variables
echo $customer->firstname . " " . $customer->name . " is " . $customer->age . " years old.<br>";
echo "He has the following means of payement :<br>";
foreach ($customer->payments as $payment) {
  echo "- $payment <br>";
}
