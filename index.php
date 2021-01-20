<?php 

require_once "Models/database.php";
require_once "Models/producto.php";


 if(!isset($_GET['c']))
 {
     //Sin valor de controlador
    require_once "Controllers/inicio.controller.php";
    $controller = new InicioController();
    call_user_func(array($controller,"Inicio"));
 }else
    //con calor de controlador
 {
     $controller =$_GET['c'];
     require_once "Controllers/$controller.controller.php";
     $controller = ucwords ($controller)."Controller";
     $controller = new $controller;
     $action = isset($_GET['a'])? $_GET['a'] : "Inicio";
     call_user_func(array($controller,$action));

 }

?>