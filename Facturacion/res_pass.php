<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Agroservicio el Gallero</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- CSS  -->
   <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <script type="text/javascript" src="js/res_pass.js"></script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
 <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="css/lol.png" />
           <CENTER> <LABEL>AGROSERVICIO EL GALLERO</LABEL></CENTER> 
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" accept-charset="utf-8" action="javascript: res_pass();" name="loginform" autocomplete="off" role="form" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Correo Electronico" name="correo" id="correo_id" type="email" required>
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" data-toggle="modal" data-target="#pass_reset">Restablecer Contraseña</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>



