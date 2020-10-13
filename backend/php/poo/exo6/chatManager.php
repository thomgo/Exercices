<?php

/**
 *
 */
final class chatManager
{
  private PDO $_db;

  public function setDb(PDO $connection) {
    $this->_db = $connection;
  }

  public function getDb():PDO {
    return $this->_db;
  }

  public function getCats():array {
    $query = $this->getDb()->query('SELECT * FROM chat');
    //Si on souhaite récupérer directement des objets
    $data = $query->fetchAll(PDO::FETCH_CLASS, "chat");

    //Sinon on peut utiliser fetch assoc mais il faut créer soi même les objets
    //On transforme alors chaque entrée du tableau en objet chat en l'hydratant
    // $data = $query->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($data as $key => $chat) {
    //   $data[$key] = new chat($chat);
    // }
    return $data;
  }

  //Fonction pour ajouter un chat, elle attend explicitement un objet chat et non pas un tableau
  public function addCat(chat $chat):bool {
    $query = $this->getDb()->prepare("INSERT INTO chat(name, age, sexe, color) VALUES(:name, :age, :sexe, :color)");
    $result = $query->execute([
      "name" => $chat->getName(),
      "age" => $chat->getAge(),
      "sexe" => $chat->getSexe(),
      "color" => $chat->getColor()
    ]);
    return $result;
  }

  function __construct()
  {
    $this->setDb(dataBase::BD());
  }
}


 ?>
