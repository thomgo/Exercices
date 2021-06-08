<?php
/**
 *
 */
class Clio
{
  protected int $doors;
  protected int $color;
  //Attribut statique qui concerne tous les objest instanciés
  private static $price = 15000;

  //Constantes = propriétées appartenant à la class et non à l'objet

  const FIVEDOORS = 5;
  const THREEDOORS = 3;
  const COLORS = [
      "red" => 10215455,
      "green" => 131533541,
      "purple" => 76513684,
      "yellow" => 76521564,
      "grey" => 76236254456,
      "black" => 96326824,
      "blue" => 82136548,
      "orange" => 646852215
  ];


  public function setDoors(int $doors) {
    if(in_array($doors, [self::THREEDOORS, self::FIVEDOORS])) {
      $this->doors = $doors;
    }
  }

  public function getDoors():int {
    return $this->doors;
  }

  public function setColor(int $color) {
    $this->color = $color;
  }

  public function getColor():int {
    return $this->color;
  }

  //Fonction statique appelable par la classe elle-même
  public static function setPrice(int $price)  {
     self::$price = $price;
  }

  public static function getPrice():int  {
    return self::$price;
  }

  public function hydrate($data) {
    foreach ($data as $key => $value) {
      $method = "set". ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
    $this->hydrate($data);
  }
}

?>
