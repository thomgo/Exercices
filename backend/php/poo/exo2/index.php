<?php

require "city.php";

// arugment à passer dans le cas d'une hydratation
// ["name" => "Roubaix", "dept" => 59]
$city = new City("Roubaix", 59);

echo $city->showLocation();

 ?>
