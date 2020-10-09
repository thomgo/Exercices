<?php

/**
 *
 */
class City
{
  protected string $name;
  protected int $dept;

  public function setName(string $name) {
    $this->name = $name;
  }

  public function setDept(int $dept) {
    $this->dept = $dept;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getDept(): int {
    return $this->dept;
  }

  public function showLocation(): string {
    return "La ville de " . $this->name . " est dans le " . $this->dept;
  }

  public function __construct(string $name, int $dept) {
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
