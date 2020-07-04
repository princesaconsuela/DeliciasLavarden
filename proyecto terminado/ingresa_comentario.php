<?php 
include('conexion.php');
include('funciones.php');
session_start();
revisa_login();
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>registarseDeliciasLavarden</title>
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
                 <li><a  href="index.html">Inicio</a></li>
                  <li><a href="servicios.html">Servicios</a></li>
                  <li><a href="locales.html">Locales</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
                  <li><a href="quiensoy.html">Quien soy</a></li>
                  <li><a class="activo" href="formulario.php">Registrarse</a></li>

                  </ul>
               </nav>
          <div class="texto">
          <p>
          ¡Con mucho amor y dedicacion elaboramos nuestros productos! Y esperamos que disfrutes de ellas! Esperamos tus comentarios con mucho entusiasmo y tammbien tus sugerencias. <br> Gracias por ser parte. Con amor, Delicias Lavarden.</p>
          </div>
        
       </div> 
      <div class="mufin2">
                <div class="cycle-slideshow" 
                          data-cycle-fx="fadeout"
                          data-cycle-speed=1500
                          data-cycle-timeout=4000
                          data-cycle-next="#next"
                          data-cycle-manual-fx="scrollHorz"
                          data-cycle-manual-speed="200"> 
               <img src="img/mufin4.jpg" width="250">
               <img src="img/cupkake.jpg" width="250">
               <img src="img/mufin3.jpg" width="250">
                </div>
        
        </div>
       <div class="holder">
     <div class="titu">
 	<h3>Ingresa tu comentario</h3>
     </div>
 	<form action="procesa_comentario.php" method="post">
 	<table id="cajag">
 		<tr >
 			<td>Usuario</td>
 			<td class="usuario"><?php echo nombre_usuario($_SESSION['idusuario']); ?></td>
          </tr>
          <tr>
          	<td class="comentario">Comentario</td>
          	<td><textarea name="comentario" rows="5"></textarea></td>
          </tr>
          <tr>
          	<td></td>
          	<td><input type="submit" value="grabar"></td>
          </tr>
 	</table>
     </form>
 </div>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.cycle2.js"></script>
<?php 
   include('footer.php'); ?>
</html>