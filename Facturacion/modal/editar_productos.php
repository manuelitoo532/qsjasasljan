	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_producto" name="editar_producto">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_codigo" class="col-sm-3 control-label">Código Producto</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_codigo" name="mod_codigo" placeholder="Código del producto" required >
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_nombre" class="col-sm-3 control-label">Nombre Producto</label>
				<div class="col-sm-8">
				  <textarea class="form-control" id="mod_nombre" name="mod_nombre" placeholder="Nombre del producto" required ></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="mod-cantidad" class="col-sm-3 control-label">Cantidad</label>
				<div class="col-sm-8">
					<textarea  class="form-control" id="mod_cantidad" name="mod_cantidad" placeholder="Valor unidad" required maxlength="255" ></textarea>
				  
				</div>
                </div>

<div class="form-group">
				<label for="mod-compra" class="col-sm-3 control-label">Precio de compra</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="mod_compra" name="mod_compra" placeholder="Precio de compra 00.00" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>


			
			  <div class="form-group">
				<label for="mod_precio" class="col-sm-3 control-label">Precio de Venta</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_precio" name="mod_precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="mod-proveedor" class="col-sm-3 control-label">Proveedor</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="mod_proveedor" name="mod_proveedor" placeholder="Nombre del Proveedor" required maxlength="100" ></input>
				  
				</div>
                </div>

                <div class="form-group">
				<label  for="mod-fecha" class="col-sm-3 control-label">Fecha de Vencimiento</label>
				<div class="col-sm-8">
					<input class="form-control" type="date" id="mod_fecha" name="mod_fecha"  required  ></input>
				  
				</div>
                </div>
			  
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>