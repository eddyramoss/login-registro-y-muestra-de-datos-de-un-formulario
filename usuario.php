<?php

    include("db_conection.php");

    ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/usuario.css">
	<title>Usuarios</title>
</head>

<body>
	<div class="contenedor">
		<header>
			<nav>
				<ul>
					<li><a href="home.php">Inicio</a></li>
					<li><a href="nosotros.php">Sobre Nosotros</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="usuario.php">Usuarios</a></li>

				</ul>
			</nav>
		</header>
		<h1>USUARIOS</h1>
		<table>
			<td>ID USUARIO</td>
			<td>NOMBRE</td>
			<td>USUARIO</td>
			<td>CONTRASEÑA</td>
			<td>CORREO</td>

			<?php
        $sql = "SELECT*FROM usuario";
    $validacion = mysqli_query($conexion, $sql);
    while ($resultado = mysqli_fetch_array($validacion)) {
        ?>
			<tr>
				<td><?php echo $resultado['id_usuario']?>
				</td>
				<td><?php echo $resultado['nombre']?>
				</td>
				<td><?php echo $resultado['usuario']?>
				</td>
				<td><?php echo $resultado['contrasena']?>
				</td>
				<td><?php echo $resultado['correo']?>
				</td>

			</tr>
			<?php
    }

    ?>


		</table>
	</div>
</body>

</html>