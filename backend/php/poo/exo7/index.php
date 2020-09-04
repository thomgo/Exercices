<?php

require "form.php";
require "upgradedForm.php";

$form = new uppgradedForm("");

$form->setTexte("name");
$form->setRadio("radio", ["Homme" => "1", "Femme" => "0"]);
$form->setCheckbox("check[]", ["Volvo" => "suédois", "Renault" => "français"]);
$form->setSubmit("form", "envoyer");

$form->showForm();

var_dump($_POST);
 ?>
