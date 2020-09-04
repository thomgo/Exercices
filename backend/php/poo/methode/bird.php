<?php
class Bird
{
  public string $type;
  public string $color;
  public int $age;
  public array $areas;

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
