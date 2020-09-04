<?php

require "city.php";

$city = new City();

$city->setName("Roubaix");
$city->setDept(59);

echo $city->showLocation();

 ?>
