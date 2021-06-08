<?php

/**
 *
 */
final class CatManager
{
  private PDO $_db;

  public function getCats():array {
    $query = $this->_db->query('SELECT * FROM cat');
    //Si on souhaite récupérer directement des objets
    $data = $query->fetchAll(PDO::FETCH_CLASS, "Cat");

    //Sinon on peut utiliser fetch assoc mais il faut créer soi même les objets
    //On transforme alors chaque entrée du tableau en objet cat en l'hydratant
    // $data = $query->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($data as $key => $cat) {
    //   $data[$key] = new Cat($cat);
    // }
    return $data;
  }

  //Fonction pour ajouter un cat, elle attend explicitement un objet cat et non pas un tableau
  public function addCat(cat $cat):bool {
    $query = $this->_db->prepare("INSERT INTO cat(name, age, sexe, color) VALUES(:name, :age, :sexe, :color)");
    $result = $query->execute([
      "name" => $cat->getName(),
      "age" => $cat->getAge(),
      "sexe" => $cat->getSexe(),
      "color" => $cat->getColor()
    ]);
    return $result;
  }

  function __construct()
  {
    // On récupère une instance de PDO depuis la classe DataBase
    $this->_db = DataBase::getDB();
  }
}


 ?>
