<?php

/**
 *
 */
class Form
{
  protected $formContent;

  public function setTexte(string $name, string $value=null) {
    $this->formContent .= "<input type='text' name='$name' value='$value'>";
  }

  public function setSubmit(string $name, string $value=null) {
    $this->formContent .= "<input type='submit' name='$name' value='$value'></form>";
  }

  public function showForm() {
    echo $this->formContent;
  }

  function __construct(string $action)
  {
    $this->formContent = "<form action='$action' method='post'>";
  }
}
?>
