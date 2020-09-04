<?php

/**
 *
 */
class Form
{
  protected $formContent;

  public function setTexte($name, $value=false) {
    $this->formContent .= "<input type='text' name='$name' value='$value'>";
  }

  public function setSubmit($name, $value=false) {
    $this->formContent .= "<input type='submit' name='$name' value='$value'></fieldset></form>";
  }

  public function showForm() {
    echo $this->formContent;
  }

  function __construct(string $action)
  {
    $this->formContent = "<form action='$action' method='post'>
      <fieldset>";
  }
}
?>
