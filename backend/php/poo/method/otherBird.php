<?php
class OtherBird
{
  public string $type;
  public string $color;
  public int $age;
  public array $areas;

  // The constructor waiting one argument for each attribut
  public function __construct($type, $color, $age, $areas) {
    // Set the value of the attribut to the value of the argument
    $this->type = $type;
    $this->color = $color;
    $this->age = $age;
    $this->areas = $areas;
  }

  // // Construct working with an array
  // public function __construct(array $data) {
  //   $this->type = $data["type"];
  //   $this->color = $data["color"];
  //   $this->age = $data["age"];
  //   $this->areas = $data["areas"];
  // }

  public function sing() {
    // $this refers to the object the methode is called on, not the class
    // It means THIS object I am working with
    echo "<br>$this->type : Cui cui<br>";
  }

  public function fly(string $destination):string {
    // We want to access the age of the object calling the methode so we use $this
    if ($this->age > 4) {
      return "The bird is flying to $destination";
    }
    else {
      return "This bird is too young to fly";
    }
  }
}
