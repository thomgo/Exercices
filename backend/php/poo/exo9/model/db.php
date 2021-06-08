<?php
/**
 * Classe basique qui permet de générer une connexion à la base données
 * Les identifiants de connexion sont stockés dans des constantes
 * La fonction getDB() est une fonction statique, ainsi elle peut être appelée sans instancier la classe
 * Cette class n'a pas vocation à être instanciée, elle sert simplement à renvoyer un objet PDO elle est donc abstraite
 */
abstract class DataBase {

  const HOST  = "localhost";
  const NAME = "cats";
  const LOGIN = "root";
  const PASSWORD = "ThomAdmin12";

  static public function getDB() {
    try {
      $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD);
      return $db;
    } catch (Exception $e) {
      exit($e->getMessage());
    }
  }

}
 ?>
