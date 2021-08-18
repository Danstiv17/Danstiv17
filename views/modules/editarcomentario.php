<?php 

	session_start();
	if (!$_SESSION['validado']) {
		header('location:index.php?action=ingresar');
		exit();
	}

?>


<h1>Comentarios</h1>

<form method="post">
	<?php 
		$editar = new comentarioControlador();
		$editar->consultarcomentarioIdControlador();
		$editar->actualizarcomentarioControlador();
	?>
</form>

