<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['mod_nombre'])){
			$errors[] = "Nombre del producto vacío";
		}else if(empty($_POST['mod_cantidad'])){
			$errors[]="Cantidad vacío";
		}else if(empty($_POST['mod_compra'])){
			$errors[]="Precio de Compra vacío";
		}else if (empty($_POST['mod_precio'])){
			$errors[] = "Precio de venta vacío";
		}else if(empty($_POST['mod_proveedor'])){
			$errors[]="Proveedor vacío";
		}else if(empty(($_POST["mod_fecha"]))){
			$errors[] ="fecha vacío";
		} else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_codigo']) &&
			!empty($_POST['mod_nombre']) &&
			!empty($_POST['mod_cantidad'])&&
			!empty($_POST['mod_compra'])&&
			!empty($_POST['mod_precio'])&&
			!empty($_POST['mod_proveedor'])&&
			!empty($_POST["mod_fecha"]))
		{
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["mod_codigo"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre"],ENT_QUOTES)));
		$Cantidad=floatval($_POST['mod_cantidad']);
		$Compra=floatval($_POST['mod_compra']);
		$precio_venta=floatval($_POST['mod_precio']);
		$Proveedor=mysqli_real_escape_string($con,(strip_tags($_POST["mod_proveedor"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["mod_fecha"],ENT_QUOTES)));
		$id_producto=$_POST['mod_id'];
		$sql="UPDATE products SET codigo_producto='".$codigo."', producto='".$nombre."', cantidad_unidad='".$Cantidad."',precio_compra='".$Compra."', precio_venta='".$precio_venta."', Proveedor='".$Proveedor."',Fecha_vencimiento='".$fecha."' WHERE id_producto='".$id_producto."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Producto ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>