<h1>Registar Un Comentario</h1>

<form method="post" >
	
	<label for="nombre">Escriba aqui su comentario<span></span></label>
	<input type="text" id="comentario" name="comentario" required>
	<br>
	<br>
	

	<p style="text-align: center;  width: 360px;">
	<input style="padding-left: 18px" class="button button2" type="submit" name="enviar" value="&nbsp;&nbsp;&nbsp; Registrar">
</p>

</form>

<?php

	$control = new comentarioControlador();
	$control->registrarcomentarioControlador();

	if(isset($_GET['action'])){
		if($_GET['action'] == 'oks'){
			print "Comentario Registrado Correctamente";
		}
	}

?>