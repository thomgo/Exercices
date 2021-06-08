<?php

/**
 * La classe client a vocation à être instanciée, elle hérite de personne car elle a besoin de ses caractéristiques
 */
class client extends personne
{
  protected string $adresse;

  public function setAdresse(string $adresse) {
    $this->adresse = $adresse;
  }

  public function getAdresse():string {
    return $this->adresse;
  }

  //méthode qui appelle des propriétés de client et personne
  public function getCoord() {
    echo $this->prenom . " " . $this->nom . " habite au " . $this->adresse;
  }

  public function WhoAmI() {
    echo "je suis un client";
  }

  //Comme client hérite de personne, client possède toutes les méthodes de personne
  //L'hydrateur hydrate donc les deux classes en même temps
  //Attention cependant si la classe personne avait eu son propre constructeur, il aurait fallu le rappeler dans le constructeur de client
  function __construct(array $data)
  {
    $this->hydrate($data);
    //Exemple d'appelle du constructeur parent
    //parent::__construct(argument)
  }
}



 ?>
