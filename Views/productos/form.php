<div class="wrapper">
   <div class="row">
      <div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
                  <?=$titulo?>
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
                     <form class="form" method="POST" action="?c=producto&a=Guardar">
                        <input class="" name="id" type="hidden" value="<?=$p->getProd_id()?>">
                        <div>
                           <span>Nombre</span>
                           <input type="text" name="nombre" class="form-input"  value="<?=$p->getProd_nombre()?>">
                        </div>
                        <br>
                        <div>
                           <span>Marca</span>
                           <input type="text" name="marca" class="form-input"  value="<?=$p->getProd_marca()?>">
                        </div>
                        <br>
                        <div>
                           <span>Costo</span>
                           <input type="text" name="costo" class="form-input"  value="<?=$p->getProd_costo()?>">
                        </div>
                        <br>
                        <div>
                           <span>Precio</span>
                           <input type="text" name="precio" class="form-input"  value="<?=$p->getProd_precio()?>">
                        </div>
                        <br>
                        <div>
                           <span>Cantidad</span>
                           <input type="text" name="cantidad" class="form-input"  value="<?=$p->getProd_cantidad()?>">
                           <br> 
                           <br>                    
                           <button type="submit" class="button">Guardar</button>

                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="index.js"></script>
</body>
</html>