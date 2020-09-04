<?php

/**
 *
 */
class Person
{
  protected $lastName;
  protected $firstName;
  protected $adress;

  public function setlastName($lastName) {
    $this->lastName = $lastName;
  }

  public function setfirstName($firstName) {
    $this->firstName = $firstName;
  }

  public function setAdress($adress) {
    $this->adress = $adress;
  }

  public function getlastName() {
    return $this->lastName;
  }

  public function getfirstName() {
    return $this->firstName;
  }

  public function getAdress() {
    return $this->firstName;
  }

  public function getCoord() {
    return $this->lastName . " " . $this->firstName . " habite à " . $this->adress;
  }

  //Exemple d'un constructeur avec un hydrateur
  public function hydrate($data) {
    foreach ($data as $key => $value) {
      $methode = "set". ucfirst($key);
      $this->$methode($value);
    }
  }

  public function __construct($data) {
    $this->hydrate($data);
  }
}



 ?>
