<?php

class Producto
{

    private $pdo;

    private $prod_id;
    private $prod_nombre;
    private $prod_marca;
    private $prod_costo;
    private $prod_precio;
    private $prod_cantidad;

    public function __CONSTRUCT()
    {
        $this->pdo = DataBase::Conect();

    }

    public function getProd_id(): ?int
    {
        return $this->prod_id;
    }

    public function setProd_id(int $id)
    {
        $this->prod_id = $id;
    }

    public function getProd_nombre(): ?string
    {
        return $this->prod_nombre;
    }

    public function setProd_nombre(string $nombre)
    {
        $this->prod_nombre = $nombre;
    }

    public function getProd_marca(): ?string
    {
        return $this->prod_marca;
    }

    public function setProd_marca(string $marca)
    {
        $this->prod_marca = $marca;
    }

    public function getProd_costo(): ?float
    {
        return $this->prod_costo;
    }

    public function setProd_costo(float $costo)
    {
        $this->prod_costo = $costo;
    }

    public function getProd_precio(): ?float
    {
        return $this->prod_precio;
    }

    public function setProd_precio(float $precio)
    {
        $this->prod_precio = $precio;
    }

    public function getProd_cantidad(): ?int
    {
        return $this->prod_cantidad;
    }

    public function setProd_cantidad(int $cantidad)
    {
        $this->prod_cantidad = $cantidad;
    }

   

    public function CantidadProd()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT SUM(prod_cantidad) as CantidadProd FROM productos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function Listar()
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM productos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function Insertar(Producto $p)
    {
        try {
            $consulta = "INSERT INTO productos(prod_nombre,
            prod_marca,
            prod_costo,
            prod_precio,
            prod_cantidad) VALUES(?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getProd_nombre(),
                    $p->getProd_marca(),
                    $p->getProd_costo(),
                    $p->getProd_precio(),
                    $p->getProd_cantidad(),

                ));

        } catch (Exception $e) {
            die($e->getMessage());

        }

    }

    public function Actualizar(Producto $p)
    {
        try {
            $consulta = "UPDATE productos SET
            prod_nombre=?,
            prod_marca=?,
            prod_costo=?,
            prod_precio=?,
            prod_cantidad=? WHERE prod_id=?;";
            $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getProd_nombre(),
                    $p->getProd_marca(),
                    $p->getProd_costo(),
                    $p->getProd_precio(),
                    $p->getProd_cantidad(),
                    $p->getProd_id(),

                ));

        } catch (Exception $e) {
            die($e->getMessage());

        }

    }

    public function Obtener($id)
    {
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM productos WHERE prod_id=?;");
            $consulta->execute(array($id));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $p = new Producto();
            $p->setProd_id($r->prod_id);
            $p->setProd_nombre($r->prod_nombre);
            $p->setProd_marca($r->prod_marca);
            $p->setProd_costo($r->prod_costo);
            $p->setProd_precio($r->prod_precio);
            $p->setProd_cantidad($r->prod_cantidad);

            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function Eliminar($id)
    {
        try {
            $consulta = "DELETE FROM productos  WHERE prod_id=?;";
            $this->pdo->prepare($consulta)
                ->execute(array($id));

        } catch (Exception $e) {
            die($e->getMessage());

        }

    }

}
