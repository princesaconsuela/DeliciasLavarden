<?php 
    include('conexion.php');
    //creo una variable para email y password

    $email =$_POST['email'];
    $password =$_POST['password'];//$password =$_POST['password'];

    $query = "SELECT idusuario FROM dlavarden WHERE email='$email' AND password='$password' ";

    $resultado = mysqli_query($conexion, $query);
    
    if(mysqli_num_rows($resultado) > 0) {

    	session_start(); //inicializa session

    	$fila = mysqli_fetch_array($resultado); //capturo fila

    	$_SESSION['idusuario'] = $fila['idusuario'];
    	//guardo el idusuario como variable de sesion

    	header("location:visitas.php");
    	//redirecciona a visitas.php que ya creaste
        }else{
    	   echo "Datos incorrectos. Intentelo nuevamente
    	<a href=\"login.php\">aquí </a>";

    }


 ?>