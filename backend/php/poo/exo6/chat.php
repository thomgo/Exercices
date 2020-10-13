<?php
/**
 *
 */
class chat
{

  protected int $id;
  protected string $name;
  protected int $age;
  protected string $sexe;
  protected string $color;

  //Constantes qui nous serviront à vérifier les valeurs passées aux setters
  const sexes = ["male", "female"];
  const colors = ["white", "grey", "black", "ginger"];

  public function setId(int $id) {
    $this->id = $id;
  }

  //On vérifie la longueur au sein du setter
  public function setName(string $name) {
    if(strlen($name) <= 15) {
      $this->name = $name;
    }
  }

  //On vérifie la valeur au sein du setter
  public function setAge(int $age) {
    if($age > 0 && $age < 30) {
      $this->age = $age;
    }
  }

  //On vérifie au sein du setter que le sexe et la couleur correspondent aux constantes
  public function setSexe(string $sexe) {
    if(in_array($sexe, self::sexes)) {
      $this->sexe = $sexe;
    }
    else {
      $this->sexe = "inconnu";
    }
  }

  public function setColor(string $color) {
    if(in_array($color, self::colors)) {
      $this->color = $color;
    }
    else {
      $this->color = "inconnue";
    }
  }

  public function getId():int {
    return $this->id;
  }

  public function getName():string {
    return $this->name;
  }

  public function getAge():int {
    return $this->age;
  }

  public function getSexe():string {
    return $this->sexe;
  }

  public function getColor():string {
    return $this->color;
  }

  public function speak() {
    echo "<p>Miaou miaou, je m'appelle " . $this->name . "</p>";
  }

  public function hydrate(array $data) {
      foreach ($data as $key => $value) {
        $methode = "set". ucfirst($key);
        $this->$methode($value);
      }
  }

  //On a modifié le constructeur afin qu'il puissent supporter le PDO FETCH_CLASS
  //Fetch class n'appelle pas le constructeur avec un argument, on a donc considéré que data pouvait être null
  function __construct(array $data = null)
  {
    if($data) {
      $this->hydrate($data);
    }
  }
}


 ?>
