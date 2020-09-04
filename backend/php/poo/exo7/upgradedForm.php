<?php

/**
 *
 */
class uppgradedForm extends Form
{

  public function setRadio($name, $buttons) {
    foreach ($buttons as $key => $value) {
      $this->formContent .= "<input type='radio' name='$name' value='$value'> $key <br>";
    }
  }

  public function setCheckbox($name, $buttons) {
    foreach ($buttons as $key => $value) {
      $this->formContent .= "<input type='checkbox' name='$name' value='$value'> $key <br>";
    }
  }

  function __construct($action)
  {
    parent::__construct($action);
  }
}
?>
