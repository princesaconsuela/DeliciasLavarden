 <?php 
     function nombre_usuario($idusuario){
     	global $conexion;

     	$rs = mysqli_query($conexion, "SELECT nombre FROM dlavarden WHERE idusuario='$idusuario'"); //

     	$fila =mysqli_fetch_array($rs); //captura fila

     	return $fila['nombre'];
     }

        function revisa_login(){
        	if(isset($_SESSION['idusuario']) == false){
        		header('location:login.php'); //redirecciona al formulario para que se vuelva a logear
        	}
        }
 ?>