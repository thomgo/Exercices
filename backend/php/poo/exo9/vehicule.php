<?php

/**
 * Classe abstraite qui contient des caractéristiques communes à d'autres classes
 * Elle n'a pas vocation à être instanciée
 */
abstract class vehicule
{

  protected $immatriculation;
  protected $couleur;

  public function setImmatriculation($immatriculation) {
    $this->immatriculation = $immatriculation;
  }

  public function getImmatriculation() {
    return $this->immatriculation;
  }

  public function setCouleur($couleur) {
    $this->couleur = $couleur;
  }

  public function getCouleur() {
    return $this->couleur;
  }

  public function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $methode = "set". ucfirst($key);
      $this->$methode($value);
    }
  }
}


 ?>
