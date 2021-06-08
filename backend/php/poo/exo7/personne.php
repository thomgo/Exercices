<?php

/**
 * Class abstraite représentant une personne, cette classe n'a pas vocation à être instanciée
 * Elle définie simplement des caractéristiques générales que d'autres classes utiliseront
 */
abstract class personne
{
  protected string $nom;
  protected string $prenom;

  public function setNom(string $nom) {
    $this->nom = $nom;
  }

  public function getNom():string {
    return $this->nom;
  }

  public function setPrenom(string $prenom) {
    $this->prenom = $prenom;
  }

  public function getPrenom():string {
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
