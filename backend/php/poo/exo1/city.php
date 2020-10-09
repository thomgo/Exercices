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
}



 ?>
