	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código Producto</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre Producto</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="255" ></textarea>
				  
				</div>
                </div>
			  
 <div class="form-group">
				<label for="cant" class="col-sm-3 control-label">Cantidad</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="cant" name="cant" placeholder="Valor unidad" required maxlength="255" ></textarea>
				  
				</div>
                </div>


 <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio de compra</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="precio_c" name="precio_c" placeholder="Precio de compra 00.00" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			 
			 <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio de venta</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="precio_v" name="precio_v" placeholder="Precio de venta 00.00" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			  	  <div class="form-group">
				<label for="Proveedor" class="col-sm-3 control-label">Proveedor</label>
				<div class="col-sm-8">
					<input class="form-control" id="proveedor" name="proveedor" placeholder="Nombre del Proveedor" required maxlength="100" ></input>
				  
				</div>
                </div>
                 <div class="form-group">
				<label for="Proveedor" class="col-sm-3 control-label">Fecha de Vencimiento</label>
				<div class="col-sm-8">
					<input class="form-control" type="date" id="fecha_vencimiento" name="fecha_vencimiento"  required  ></input>
				  
				</div>
                </div>
			  
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>