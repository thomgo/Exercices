<?php

/**
 *
 */
class Person
{
  protected string $lastName;
  protected string $firstName;
  protected string $adress;

  public function setlastName(string $lastName) {
    $this->lastName = $lastName;
  }

  public function setfirstName(string $firstName) {
    $this->firstName = $firstName;
  }

  public function setAdress(string $adress) {
    $this->adress = $adress;
  }

  public function getlastName(): string {
    return $this->lastName;
  }

  public function getfirstName(): string {
    return $this->firstName;
  }

  public function getAdress(): string {
    return $this->firstName;
  }

  public function getCoord(): string {
    return $this->lastName . " " . $this->firstName . " habite à " . $this->adress;
  }

  //Exemple d'un constructeur avec un hydrateur simple
  public function hydrate(Array $data) {
    foreach ($data as $key => $value) {
      $methode = "set". ucfirst($key);
      $this->$methode($value);
    }
  }

  public function __construct(Array $data) {
    $this->hydrate($data);
  }
}



 ?>
