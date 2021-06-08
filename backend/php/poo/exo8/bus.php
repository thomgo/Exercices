<?php

/**
 *
 */
class bus extends vehicule
{
  protected $etages;

  const nombreEtages = [1, 2];

  public function setEtages(int $etages) {
    if(in_array($etages, self::nombreEtages)) {
      $this->etages = $etages;
    }
  }

  public function getEtages():int {
    return $this->etages;
  }

  function __construct($data)
  {
    $this->hydrate($data);
  }
}


 ?>
