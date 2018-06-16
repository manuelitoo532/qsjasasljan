<?php
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['nombre'])){
			$errors[] = "Nombre del producto vacío";
		} else if ($_POST['cant']==""){
			$errors[] = "Selecciona el cant del producto";
		} else if (empty($_POST['precio_c'])){
			$errors[] = "Precio_c de compra vacío";
		}else if (empty($_POST['precio_c'])){
			$errors[] = "Precio_v de venta vacío";
		}else if(empty($_POST['proveedor'])){
			$errors[] = "Nombre proveedor vacío";
        }else if(empty($_POST['fecha_vencimiento'])){
			$errors[] = "Fecha de vencimiento no ingresada";
		}else if (
			!empty($_POST['codigo']) &&
			!empty($_POST['nombre']) &&
			$_POST['cant']!="" &&
			!empty($_POST['precio_c'])&&
			!empty($_POST['precio_v'])&&
            !empty($_POST['proveedor'])&&
			!empty($_POST['fecha_vencimiento'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$cant=strip_tags($_POST['cant']);
		$precio_c=floatval($_POST['precio_c']);
		$precio_v=floatval($_POST['precio_v']);
		$proveedor=mysqli_real_escape_string($con,(strip_tags($_POST["proveedor"],ENT_QUOTES)));
		$date_added=date("Y-m-d H:i:s");
        $fecha_vencimiento=mysqli_real_escape_string($con,(strip_tags($_POST["fecha_vencimiento"],ENT_QUOTES)));
		$sql="INSERT INTO products VALUES ('','$codigo','$nombre','$cant','$date_added','$precio_c','$precio_v','$proveedor','$fecha_vencimiento')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
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