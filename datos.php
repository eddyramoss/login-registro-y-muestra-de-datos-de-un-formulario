<?php

    require("db_conection.php");
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['correo'];
    $peticion = $_POST['peticion'];

    $consulta = "INSERT INTO contactos (nombre, usuario, correo, peticion) 
                                VALUE  ('$nombre','$usuario','$email','$peticion')";
    $verficacion = mysqli_query($conexion, $consulta);
