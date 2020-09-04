<?php

/**
 *
 */
class City
{
  protected $name;
  protected $dept;

  public function setName($name) {
    $this->name = $name;
  }

  public function setDept($dept) {
    $this->dept = $dept;
  }

  public function getName() {
    return $this->name;
  }

  public function getDept() {
    return $this->dept;
  }

  public function showLocation() {
    return "La ville de " . $this->name . " est dans le " . $this->dept;
  }

  public function __construct($name, $dept) {
    $this->setName($name);
    $this->setDept($dept);
  }

  //Exemple d'un constructeur avec un hydrateur
  // public function hydrate($data) {
  //   foreach ($data as $key => $value) {
  //     $methode = "set". ucfirst($key);
  //     $this->$methode($value);
  //   }
  // }
  //
  // public function __construct($data) {
  //   $this->hydrate($data);
  // }
}



 ?>
