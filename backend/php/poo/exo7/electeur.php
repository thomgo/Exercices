<?php


/**
 * La classe client a vocation à être instanciée, elle hérite de personne car elle a besoin de ses caractéristiques
 */
class electeur extends personne
{
  protected string $bureau;
  protected bool $vote;

  public function setBureau(string $bureau) {
    $this->bureau = $bureau;
  }

  public function getBureau():string {
    return $this->bureau;
  }

  public function setVote(bool $vote) {
    $this->vote = $vote;
  }

  public function getVote():bool {
    return $this->vote;
  }

  public function WhoAmI() {
    echo "je suis un électeur";
  }


  public function aVoter() {
    //Si l'électeur a déjà voté
    if($this->vote) {
      echo "Attention on ne peut pas voter deux fois !";
      return;
    }
    //Sinon on le fait voter
    $this->vote = true;
    echo "<p>" . $this->nom . " " . $this->prenom . " a voté à " . $this->bureau . "</p>";
  }

  //Comme électeur hérite de personne, électeur possède toutes les méthodes de personne
  //L'hydrateur hydrate donc les deux classes en même temps
  //Attention cependant si la classe personne avait eu son propre constructeur, il aurait fallu le rappeler dans le constructeur d'électeur
  function __construct(array $data)
  {
    //Par défaut on part du principe qu'un nouvel électeur n'a pas encore voté
    $this->vote = false;
    $this->hydrate($data);
    //Exemple d'appelle du constructeur parent
    //parent::__construct(argument)
  }
}



 ?>
