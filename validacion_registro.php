<?php

    include('db_conection.php'); /*incluimos la conexion de base de datos*/

    /**llamada de variables mediantes metodo post */
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];

    /**Ingresamos los datos  */
    $registro = "INSERT INTO usuario(nombre,usuario,contrasena,correo) 
                            VALUE ('$nombre','$usuario','$contrasena','$correo')";

    /**validamos los datos y la conexion */
    $validacion = mysqli_query($conexion, $registro);
