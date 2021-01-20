<div class="container">
<h1 class="my-3"><?=$titulo?></h1>
<form method="POST" class="bg-dark px-3 py-3 text-light" action="?c=producto&a=Guardar">
  <input class="form-control" name="id" type="hidden" value="<?=$p->getProd_id()?>">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre Producto</label>
    <input type="text" class="form-control" name="nombre" value="<?=$p->getProd_nombre()?>">
 </div>
 <div class="mb-3">
    <label for="prod_marca" class="form-label">Marca Producto</label>
    <input type="text" class="form-control" name="marca" value="<?=$p->getProd_marca()?>">
 </div>
 <div class="mb-3">
    <label for="prod_costo" class="form-label">Costo Producto</label>
    <input type="number" class="form-control" name="costo" value="<?=$p->getProd_costo()?>">
 </div>
 <div class="mb-3">
    <label for="prod_precio" class="form-label">Precio Producto</label>
    <input type="number" class="form-control" name="precio" value="<?=$p->getProd_precio()?>">
 </div>
 <div class="mb-3">
    <label for="prod_cantidad" class="form-label">Stock Producto</label>
    <input type="number" class="form-control" name="cantidad" value="<?=$p->getProd_cantidad()?>">
 </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

</div>