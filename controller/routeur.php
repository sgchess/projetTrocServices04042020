<?php

// insertion des classes Controller...
require_once("ControllerClient.php");

// définition de l'action et du controller par défaut
$default_action = "displayAll";
$default_controller = "controllerClient";

// redéfinition éventuelle de l'action si une action est passée dans l'url
$action = $default_action;
if (isset($_GET["action"])) {
  $action = $_GET["action"];
}

// redéfinition éventuelle du controller si une action est passée dans l'url
$controller = $default_controller;
if (isset($_GET["controller"])) {
  $controller = "controller".ucfirst($_GET["controller"]);
}

// appel de l'action du controller
$controller::$action();

?>
