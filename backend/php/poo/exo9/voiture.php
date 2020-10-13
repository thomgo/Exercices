<?php

/**
 *
 */
class voiture extends vehicule
{
  protected $portes;

  const nombrePortes = [3, 5];

  public function setPortes(int $portes) {
    if(in_array($portes, self::nombrePortes)) {
      $this->portes = $portes;
    }
  }

  public function getPortes():int {
    return $this->portes;
  }

  function __construct($data)
  {
    $this->hydrate($data);
  }
}


 ?>
