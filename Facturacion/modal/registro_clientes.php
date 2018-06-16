	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo cliente <span class="sr-only">(current)</span></h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente_1">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-4">
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre cliente" required>
				</div>
				
				<i><label for="apellido" class="col-sm-2 control-label">Apellido</label></i>
			  <div class="col-sm-3">
				  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido Cliente" required>
				</div>
				
			  </div>
			  
			  
			  <div class="form-group">
				<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
				<div class="col-sm-3">
				  <input pattern="[0-9]{4}-[0-9]{4}" maxlength="9"  type="text" class="form-control" id="telefono" name="telefono" placeholder="0000-0000" >
				</div>
				
				<i><i><label for="celular" class="col-sm-2 control-label">Celular</label></i></i>
				<div class="col-sm-3">
				  <input pattern="[0-9]{4}-[0-9]{4}" maxlength="9"  type="text" class="form-control" id="celular"  name="celular" placeholder="0000-0000">
				</div>
			  </div>
			  
			  <div class="form-group">
			      <label for="dui" class="col-sm-3 control-label">DUI</label>
			      <div class="col-sm-4">
			          <input pattern="[0-9]{8}-[0-9]{1}" maxlength="10" type="text" class="form-control" id="DUI" name="DUI" placeholder="00000000-0">
			      </div>
			  </div>
			  
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email"  placeholder="ejemplo@ejemplo.com">
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="direccion" class="col-sm-3 control-label">Dirección</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="direccion" name="direccion"   maxlength="255" placeholder="Lugar"></textarea>
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
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