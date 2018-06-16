function res_pass(){
	var correo = document.getElementById('correo_id').value
	var caracteres ="abcdefghijklmnñopqrstuvwxyzABCDEFGHYJKLMNÑOPQRSTUVWXYZ1234567890_-#$%&"
	var contra = ""
	for (var i = 0; i <= 10; i++) {
		contra += caracteres.charAt(Math.floor(Math.random()*caracteres.length)); 
	}
	alert(contra)
	$.ajax({
		type: "POST",
		url: "res.php",
		data: "pass="+contra+"&correo="+correo,
		success: function(resultado){
			
			if (resultado == "1") {
				alert('Ocurrio un error...')
			}else if(resultado == "0"){
				alert('Contraseña Reseteada con exito... Por favor revisar su correo electronico')
			}
		}
	});
}