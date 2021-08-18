<?php 

	session_start();

	if (!$_SESSION['validado']) {
		header('location:ingresar');
		exit();
	}

	$control = new comentarioControlador();

?>


<h1>Comentario</h1>

<table style="height: 138px;">
	<thead style="background-color: rgba(255, 255, 255, 0.9);">
		<th>Comentario</th>
		
		<th colspan="2">Opciones</th>
	</thead>
	<tbody style="background-color: rgba(255, 255, 255, 0.6);">
		<?php 

			$control->consultarcomentariosControlador();
			$control->eliminarcomentarioControlador();

		?>
	</tbody>

</table>

<?php 

	if (isset($_GET['action'])) {
		if($_GET['action'] == "upok"){
			print "<p class='msg'>Comentario Actualizado Correctamente</p>";
		}
		elseif ($_GET['action'] == 'delok') {
			print "<p class='msg'>Comentario Eliminado Correctamente</p>";
		}
	}

?>