<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/ee8ebd8658.js"></script>

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/delicias.css">
</head>
<body>
	<?php 
	include('header.php'); ?>
 
	<form class="formulario" action="procesa_login.php" method="post">
		<h1>Iniciar sesión</h1>
		
			<div class="input-contenedor">

				<i class="fas fa-envelope icon"></i>

				<input type="text" placeholder="email" name="email">
			</div>

			<div class="input-contenedor">

			  <i class="fas fa-key icon"></i>

				<input type="password" placeholder="contraseña" name="password">
			</div>

			<input type="submit" value="Iniciar Sesión" class="button">

		<p>¿No tienes cuenta?</p>
			<p>Registrate <a class="link" href="formulario.php">  aqui</a></p>
	</form>


<?php 
include('footer.php'); ?>
</html>