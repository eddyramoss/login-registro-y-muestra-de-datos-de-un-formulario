<?php

    include("db_conection.php"); //llamamos la conexion a la base de datos 

    //declaramos las variables que contendran los datos del formulario
    $usuario = $_POST['Usuario'];
    $contrasena = $_POST['contrasena'];

    //iniciamos sesion
    session_start();
    $_SESSION['Usuario'] = $usuario;

    //realizamos la peticion
    $consulta = "SELECT*FROM usuario WHERE usuario='$usuario' and contrasena = '$contrasena'";

    //realizamos la consulta 
    $sql = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_array($sql);

    //validar datos 
    if(mysqli_num_rows($sql)!=1){
        //dato incorrecto
        echo "<h1>Usuario y contraseña incorrecta</h1>";
    }else{
        //datos correctos
        header ('location:home.php');
    }
?>