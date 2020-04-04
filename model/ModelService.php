<?php

require_once("Model.php");

public class ModelService extends Model {

  public static function getAllServices(){
    $sql = "SELECT * FROM Services ORDER BY idServices;";
    return Model::fetchDB($sql);
  }

  public static function getServicesByTitre($titre){
    $sql = "SELECT * FROM Services WHERE titre='$titre'  ORDER BY idService;";
    return Model::fetchDB($sql);
  }

  public static function ajouterServices($titre, $description, $cout){
    $sql = "INSERT INTO Services(titre, description, cout) VALUES(:titre, :description, :cout)");
    $req = self::$pdo->prepare($sql);
    $req->execute(array(
      "titre" => $titre,
      "description" => $description,
      "cout" => $cout
    ));
  }

}

?>
