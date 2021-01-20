<div class="container">
<table class="table table-dark table-bordered ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Marca</th>
      <th scope="col">Costo</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
      </tr>
  </thead>
  <tbody>
  <?php foreach ($this->model->Listar() as $r): ?>
    <tr>
      <th scope="row"><?=$r->prod_id?></th>
      <td><?=$r->prod_nombre?></td>
      <td><?=$r->prod_marca?></td>
      <td><?=$r->prod_costo?></td>
      <td><?=$r->prod_precio?></td>
      <td><?=$r->prod_cantidad?></td>
      <td>
      <a class="btn btn-info mx-2 my-2" href="?c=producto&a=FormInsertar&id=<?=$r->prod_id?>" >Actualizar</a>
      <a class="btn btn-danger mx-2 my-2"   href="?c=producto&a=Borrar&id=<?=$r->prod_id?>" >Borrar</a>
      </td>
    </tr>
  <?php endforeach?>
  <a class="btn btn-primary my-3" type="button"  href="?c=producto&a=FormInsertar" >Insertar Producto</a>

  </tbody>

</table>
