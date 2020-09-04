<?php

class Student
{
  // Name and age can only be accessed from the class since they are protected
  protected string $name;
  protected int $age;

  // The setter for the name attribut expecting a string
  public function setName(string $name):Student  {
    // If the name does not have two letters we throw an exception
    if (strlen($name) <= 1) {
      throw new Exception('The name must contain at least 1 character');
    }
    // If no exception has been thrown we set the value to the attribut
    $this->name = $name;
    // We return the object for something called method chaining (https://en.wikipedia.org/wiki/Method_chaining)
    return $this;
  }

  // The setter for the age attribut expecting an integer
  public function setAge(int $age):Student {
    // If the age is too small or too big we throw an exception
    if ($age < 16 || $age > 70) {
      throw new Exception('The age must be an int between 16 and 70');
    }
    $this->age = $age;
    return $this;
  }
}
