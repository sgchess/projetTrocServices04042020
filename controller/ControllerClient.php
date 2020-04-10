<?php

require_once("model/ModelClient.php");

class ControllerClient{

  public static function displayAll(){
    // le controller demande au model la liste des clients
    // et la stocke dans la variable $res
    $res = ModelClient::getAll("Clients","ModelClient");
    // puis il convoque la view "clients/list.php"
    // qui se chargera de l'affichage de $res
    //require("view/clients/list.php");
    $view = "clients/list.php";
    require("view/view.php");

  }

  public static function display(){
    $nom = $_GET["nom"];
    // le controller demande au model le client
    // et le stocke dans la variable $clt
    $clt = ModelClient::getClientByNom($nom,"ModelClient");
    // puis il convoque la view "clients/detail.php"
    // qui se chargera de l'affichage de $clt
    //require("view/clients/detail.php");
    $view = "clients/detail.php";
    require("view/view.php");
  }

  public static function create() {
    //require("view/clients/create.php");
    $view = "clients/create.php";
    require("view/view.php");
  }

  public static function created() {
    //Util::affiche($_GET);
    extract($_GET);
    ModelClient::addClient($nomClient, $prenomClient, $emailClient, $mdpClient, $dateInsClient);
    self::displayAll();
  }

}

?>
