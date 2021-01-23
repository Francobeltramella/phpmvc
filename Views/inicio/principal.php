<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-poll-h"></i>
					</p>
					<h3>
                        <?php $p=$this->model->CantidadProd()?>
                        <?=$p->CantidadProd?>
                    </h3>
					<p>TOTAL PRODUCTOS</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<p>EN VENTA</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<p>VENDIDOS</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-times"></i>
					</p>
					<h3>100+</h3>
					<p>DEVUELTOS</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Productos
						</h3>
						<i class="fas fa-ellipsis-h"></i>
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
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
						Ventas en tiempo real
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								En menos de 1 hora
								<span class="float-right">50%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width: 50%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								1 - 3 horas
								<span class="float-right">60%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:60%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Mas de 3 horas
								<span class="float-right">40%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:40%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Mas de 6 horas
								<span class="float-right">20%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:20%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Escala de ventas
						</h3>
					</div>
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="index.js"></script>


</body>
</html>