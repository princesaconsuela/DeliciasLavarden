<?php 
   include('conexion.php'); //estoy conectando el procesador con mi base de datos
   //necesito variables para el nombre, para el email y para la contaseña

   $nombre = $_POST ['nombre'];
   $email = $_POST ['email'];
   $password = $_POST ['password'];
   
   $resultado= mysqli_query($conexion, "INSERT INTO dlavarden VALUES (NULL,'$nombre', '$email', '$password')");

 header('location:login.php');

//aca estoy haciendo que los datos que se carguen vayan directamente a la base de datos
 ?>
 <!DOCTYPE html>

 <!DOCTYPE html>
 <html>

 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>procesaformu</title>
 </head>
 <body>

 	<?php if($resultado !=0) {?>
 	<p>Ir a la pagina de <a href="registro.php">registro</a></p>
 	<?php }else { ?>
 		<p>se ha producido un error. Intentelo nuevamente <a href="javascript:history.back();"></a></p>
 		<?php }  ?>
 
 </body>
 </html>