<?php

require_once "Models/producto.php";

class InicioController{
    private $model;

    public function __CONSTRUCT(){
    $this->model= new Producto();
    }

    public function Inicio(){
        $bd = DataBase::Conect();
        require_once "Views/header.php";
        require_once "Views/inicio/principal.php";

    }
}


?>