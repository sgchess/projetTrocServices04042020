<?php

require_once("Model.php");

class ModelClient extends Model {

  public static function getAllClients(){
    $sql = "SELECT * FROM Clients ORDER BY idClient;";
    return Model::fetchDB($sql);
  }

  public static function getClientByNom($nom,$class_name){
      $sql = "SELECT * FROM Clients WHERE nomClient='$nom';";
      return Model::fetchDB($sql,$class_name)[0];
  }

  public static function getClientByID($id){
      $sql = "SELECT prenomClient, nomClient FROM Clients WHERE idClient='$id' ORDER BY idClient;";
      return Model::fetchDB($sql);
  }

  public static function addClient($nom, $prenom, $email, $mdp){
    $req = self::$pdo->prepare("INSERT INTO Clients(nomClient, prenomClient, email, mdp) VALUES(:nom, :prenom, :email, :mdp)");
    $req->execute(array(
      "nom" => $nom,
      "prenom" => $prenom,
      "email" => $email,
      "mdp" => $mdp
    ));
  }

  public static function getPasswordHash($email){
    $req = self::$pdo->prepare("SELECT mdp FROM Clients WHERE email = :email;");
    $req->execute(array(
        'email' => $email));
    $res = $req->fetch();
    return $res;
  }

}

?>
