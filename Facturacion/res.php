<?php
	$correo = strip_tags($_POST['correo']);
	$pass = strip_tags($_POST['pass']);

	include 'config/conexion.php';
	$contra = password_hash($pass, PASSWORD_DEFAULT);
	$cons = mysqli_query($con,"UPDATE users SET user_password_hash = '$contra' WHERE user_email = '$correo'");
	if ($cons) {
		echo "0";
	}else{
		echo "1";
	}
?>