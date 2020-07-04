<?php 
    include('conexion.php');
    include('funciones.php');
    session_start();
    revisa_login();

    $idusuario = $_SESSION['idusuario'];// variable creada en login, revisalo

    $comentario = $_POST['comentario'];//esta variable fue creada en comentarios

    $fecha =date("Y-m-d H:i:s"); //formula para la fecha

    $ingreso = mysqli_query($conexion, "INSERT INTO comentarios (idusuario, comentario, fecha) VALUES('$idusuario', '$comentario', '$fecha')");
//de esta forma llamo a la base de datos comentarios


header('location:visitas.php');
 ?>