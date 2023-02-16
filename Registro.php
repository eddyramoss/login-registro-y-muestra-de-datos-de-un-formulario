<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/registro.css">

	<title>Registro</title>
</head>
<script>
	function confirmacion() {
		var respuesta = confirm("CONFIRMAR REGISTRO DEL USUARIO/A ");
		if (respuesta == true) {
			return true;
		} else {
			return false;
		}
	}
</script>

<body>
	<nav>
		<h1>Registrate</h1>
	</nav>
	<div class="contenedor_p">
		<form action="validacion_registro.php" method="post">
			<h2>Registro</h2>
			<br>
			<label for="">Nombre</label>

			<input type="text" name="nombre" required>
			<br>
			<label for="">Usuario</label>

			<input type="text" name="usuario" required>
			<br>
			<label for="">Contraseña</label>

			<input type="text" name="contrasena" required>
			<br>
			<label for="">Correo</label>

			<input type="email" name="correo" required>
			<br>
			<button onclick="return confirmacion()">Registrarse</button>

		</form>
		<p class="text">¿Ya tienes una cuenta? </p>
		<p class="login"><a href="login.php">Iniciar aqui</a></p>
	</div>

</body>

</html>