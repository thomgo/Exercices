<?php

/**
 * Class abstraite représentant une personne, cette classe n'a pas vocation à être instanciée
 * Elle définie simplement des caractéristiques générales que d'autres classes utiliseront
 */
abstract class personne
{
  protected $nom;
  protected $prenom;

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  abstract protected function WhoAmI();

  public function hydrate(array $data) {
      foreach ($data as $key => $value) {
        $methode = "set". ucfirst($key);
        $this->$methode($value);
      }
  }
}


 ?>
