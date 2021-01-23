<div class="wrapper">
    <div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Productos
						</h3>
						<a title="Añadir Producto" href="?c=producto&a=FormInsertar">
						<i class="fas fa-plus">
						</i>
						</a>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Marca</th>
									<th>Costo</th>
									<th>Estado</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach ($this->model->Listar() as $r): ?>
								<tr>
									<td><?=$r->prod_nombre?></td>
									<td><?=$r->prod_marca?></td>
									<td><?=$r->prod_costo?></td>
									<td>
										<span class="dot">
											<i class="bg-success"></i>
											Vendido
										</span>
									</td>
									<td><?=$r->prod_precio?></td>
									<td><?=$r->prod_cantidad?></td>
									<td>
									<a class="nav-link" title="Actualizar" 
									href="?c=producto&a=FormInsertar&id=<?=$r->prod_id?>"  >
									<i class="fas fa-retweet"></i>
									</a>
									<a class="nav-link" title="Eliminar" 
									href="?c=producto&a=Borrar&id=<?=$r->prod_id?>" >
									<i class="fas fa-trash"></i>
									</a>
									</td>
									</tr>
									<?php endforeach?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="index.js"></script>


</body>
</html>