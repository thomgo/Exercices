<?php

require "form.php";
$form = new Form("project.php", ["BgDark", "FormA"]);

$form->setTexte("name");

$form->setSubmit("form", "envoyer");

$form->showForm();

 ?>
