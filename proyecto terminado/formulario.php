<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <script src="https://kit.fontawesome.com/ee8ebd8658.js"></script>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/delicias.css">


</head>
<body>
	<?php 
	include('header.php'); ?>

	<form class="formulario" action="procesador_formu.php" method="post">
		<!--Atencion, se llama procesador_formu porque ya existe un procesador_formulario-->
		<h1>Registrate aquí</h1>
		<div class="contenedor">
			<div class="input-contenedor">
				<i class="fas fa-user icon"></i>

				<input type="text" placeholder="Nombre Completo" name="nombre">
			</div>
			<div class="input-contenedor">
				<i class="fas fa-envelope icon"></i>
				<input type="text" placeholder="email" name="email">
			</div>
			<div class="input-contenedor">
			  <i class="fas fa-key icon"></i>
				<input type="password" placeholder="contraseña" name="password">
			</div>
			<input type="submit" value="Registrarme" class="button">
			<p>Al registrarte, aceptas nuestras Condiciones de uso y política de privacidad</p>
			<p>¿Ya tienes cuenta? <a class="link" href="login.php">Iniciar sesion</a></p>
			
		</div>
		
	</form>


</body>
<?php 
include('footer.php'); ?>
</html>