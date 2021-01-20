<?php

require_once "Models/producto.php";

class ProductoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Producto();
    }

    public function Inicio()
    {
        require_once "Views/header.php";
        require_once "Views/productos/index.php";
    }

    public function FormInsertar()
    {
        $titulo = "Registrar Producto";
        $p = new Producto();
        if (isset($_GET['id'])) {

            $p = $this->model->Obtener($_GET['id']);

            $titulo = "Actualizar Producto";

        }
        require_once "Views/header.php";
        require_once "Views/productos/form.php";

    }

    public function Guardar()
    {
        $p = new Producto();
        $p->setProd_id(intval($_POST['id']));
        $p->setProd_nombre($_POST['nombre']);
        $p->setProd_marca($_POST['marca']);
        $p->setProd_costo($_POST['costo']);
        $p->setProd_precio($_POST['precio']);
        $p->setProd_cantidad($_POST['cantidad']);

        $p->getProd_id() > 0 ?
        $this->model->Actualizar($p) :
        $this->model->Insertar($p);

        header("location:?c=producto");
    }

    public function Borrar()
    {
        $this->model->Eliminar($_GET["id"]);
        header("location:?c=producto");
    }

}
