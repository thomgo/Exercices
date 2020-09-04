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
}



 ?>
