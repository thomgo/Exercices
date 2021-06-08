<?php

/**
 * Classe abstraite qui contient des caractéristiques communes à d'autres classes
 * Elle n'a pas vocation à être instanciée
 */
abstract class vehicule
{

  protected string $immatriculation;
  protected string $couleur;

  public function setImmatriculation(string $immatriculation) {
    $this->immatriculation = $immatriculation;
  }

  public function getImmatriculation():string {
    return $this->immatriculation;
  }

  public function setCouleur(string $couleur) {
    $this->couleur = $couleur;
  }

  public function getCouleur():string {
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
