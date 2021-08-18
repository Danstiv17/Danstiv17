<h1>PAGINA DE INGRESO</h1>

<form method="post">
	
	<label for="nombre">Nombre de Usuario</label>
	<input type="text" name="nombreIngreso" placeholder="Ingrese Nombre comentario" required>
	<br>

	<label for="clave">Contraseña</label>
	<input type="password" name="claveIngreso" placeholder="Ingrese Contraseña" required>
	<br>
	<br> 

	<input type="submit" name="enviar" value="Ingresar">

</form>

<?php 

	$control = new comentarioControlador();
	$control->logincomentarioControlador();

	if(isset($_GET['action'])){
		if ($_GET['action'] == 'logout') {
			print "El comentario y contraseña no es correcto";
		}

		if ($_GET['action'] == 'fallointentos') {
			print "<p>Usted ha realizado 3 intentos Fallidos</P>";
			print "<p>Por favor ponerse en contacto con el administrador del sitio</p>";
			print "<p>Por favor diligencie el captcha</p>";
		}
	}

?>
