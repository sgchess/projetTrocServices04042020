<?php

/**
 * fichier Model.php qui sera étendu à tous les autres fichiers Model
 */

require_once("config/Config.php");

class Model{

  public static $pdo;

  /**
   * fonction d'initialisation de la connexion à la BD
   */
  public static function init(){
    try {
      $hostname = Config::getHostname();
      $dbname   = Config::getDBname();
      $login    = Config::getLogin();
      $password = Config::getPassword();

      self::$pdo = new PDO("mysql:host=$hostname;dbname=$dbname",$login,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Error : ".$e->getMessage();
      die();
    }
  }

  /**
   * fonctions-requêtes communes à tous les Model
   */

  public static function fetchDB($sql,$class_name){
    try {
      $rep = Model::$pdo->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS,$class_name);
      $res = $rep->fetchAll();
      return $res;
    }
    catch(PDOException $e){
      echo "Erreur : ".$e->getMessage();
      die();
    }
  }

  public static function getAll($table,$class_name){
    $sql = "SELECT * FROM $table";
    return self::fetchDB($sql,$class_name);
  }

}

// Lancement de la connexion

Model::init();

?>
