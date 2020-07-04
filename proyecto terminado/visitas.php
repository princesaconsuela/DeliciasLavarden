<?php 
     include('conexion.php');
     include('funciones.php');
     session_start();
     revisa_login();


$resultado = mysqli_query($conexion, "SELECT idusuario, comentario, fecha FROM comentarios ORDER BY fecha DESC LIMIT 5")     
      ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comentarios</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/delicias.css">
</head>
<body>
		 	<header>
		<div>
			<div class="holder"/>
				<div class="logo"/>
					<img src="img/logo.jpg" width="100" alt="logotipo">
					<h1>Delicias Lavarden</h1>
          
		</div>
	</header>
		    <div class="holder">
			<nav>
				<ul>
		       <li><a href="index.html">Inicio</a></li>
			   <li><a href="servicios.html">Servicios</a></li>
			   <li><a href="galeria.html">galeria</a></li>
			   <li><a href="contacto.php">Contacto</a></li>
			   <li><a href="quiensoy.html">Quien soy</a></li>
               <li><a class="activo"  href="formulario.php">Registrarse</a></li>

			   </ul>
			</nav>
        </div>
        <div class="anuncio">
	<h3>¿Probaste nuestros productos?. Contanos que te parecio en los comentarios!</h3>
	<p>Usuario: <?php echo nombre_usuario($_SESSION['idusuario']); ?></p>
	<p> <a href="ingresa_comentario.php">Agregar comentario</a>
		<a href="salir.php">Cerrar sessión</a></p>
     </div>

    <?php 
    while($fila = mysqli_fetch_array($resultado)){//esta llave la cierro donde termina la table comentarios

     ?>
    <div class="caja">
		<table>
			<div class="caja2">
			
			<h4>Usuario</h4>
			<?php echo nombre_usuario($fila['idusuario']); //imprimiria el nombre del usuario ?> 
		
			
			
			<h3>fecha</h3>
				 <?php echo $fila['fecha']; //imprimiria fecha ?>
			
			
			<h4>Comentario</h4>
			<textarea rows="5"> <?php echo $fila['comentario']; //imprimiria comentario ?> 
			</textarea> 
					
				
				
			</div>
		
	</div> 
     <?php  } //est6a es la llave que abri antes de empezar la table de comentarios ?>
</body>
</html>