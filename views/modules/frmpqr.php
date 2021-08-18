<h1>Registrar PQRS</h1>

<form method="post" onsubmit="return validarDatos();">
	
	<label for="nombre">
	  <span></span></label>

	<input type="text" id="nombre" name="nombre" placeholder="Escriba su Pregunta, Queja,
Reclamo y/o Solicitud" maxlength="40" required>

	<br>
	<br>

	<p style="text-align: center;  width: 360px;">
	<input style="padding-left: 18px" class="button button2" type="submit" name="registrarcons" value="&nbsp;&nbsp;&nbsp;Registrar">
	</p>
</form>

<?php

$control = new pqrControlador();
$control->registrarpqrControlador();

if(isset($_GET['action'])){
	if($_GET['action'] == 'okincons'){
		print "PQRS Registrado Correctamente";
	}
	elseif ($_GET['action'] == 'falloincons') {
		print "Error al registrar el PQRS";
	}
}

?>