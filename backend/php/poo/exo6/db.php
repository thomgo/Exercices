<?php
/**
 * Classe basique qui permet de générer une connexion à la base données
 * Les identifiants de connexion sont stockés dans des constantes
 * La fonction BD() est une fonction statique, ainsi elle peut être appelée sans instancier la classe
 * Cette class n'a pas vocation à être instanciée, elle sert simplement à renvoyer un objet PDO elle est donc abstraite
 */
abstract class dataBase {

  const HOST  = "localhost";
  const NAME = "chats";
  const LOGIN = "root";
  const PASSWORD = "ThomAdmin12";

  static public function BD() {
    $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD);
    return $db;
  }

}
 ?>
