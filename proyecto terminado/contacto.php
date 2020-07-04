<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Contacto</title>
	     <link rel="stylesheet" type="text/css" href="css/normalize.css">

	     <link rel="stylesheet" href=" css/delicias.css" />
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
		       <li><a  href="index.html">Inicio</a></li>
			   <li><a href="servicios.html">Servicios</a></li>
			   <li><a href="galeria.html">Galería</a></li>
			   <li><a class="activo" href="contacto.php">contacto</a></li>
			   <li><a href="quiensoy.html">Quien soy</a></li>
			   <li><a href="formulario.php">Registrarse</a></li>
			   </ul>
			</nav>
         </div>
		    <div class="contacto">
		    	
            	 <h2>Contacto</h2> <a name="contacto"></a>

            	 <form action="procesador_formulario.php" method="POST" class="formulario">

            	    <label for=""></label>

            	 <input type="text" name="nombre" placeholder="Nombre">

            	    <label for=""></label>

            	 <input type="text" name="email" placeholder="email">

            	    <label for=""></label>

            	 <input type="text" name="telefono" placeholder="Telefono">

            	   <label for=""></label>

                <textarea type="text" name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>

            	   <input type="submit" value="enviar" id="boton">
      
            	</form>
            	
            </div>

           
     
      
    <?php 
      if(isset($_GET['envio']) && $_GET['envio'] == 'ok') { 
				?>
					<div class="notificacion">El mensaje se envio correctamente</div>
				<?php } ?>

	<footer>Copyright-2019 Delicias Lavarden </footer>	
</body>
</html>