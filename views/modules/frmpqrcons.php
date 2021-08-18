<?php 

session_start();
if (!$_SESSION['validado']) {
	header('location:ingresar');
	exit();
}

$control = new pqrControlador();

?>

<h1>Listado De PQRS</h1>

<table style="height: 138px;">
	<thead style="background-color: rgba(255, 255, 255, 0.9);">
		<th>&nbsp;&nbsp; Id &nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp; pqrs &nbsp;&nbsp;</th>
		<th colspan="2">&nbsp;&nbsp; Opciones &nbsp;&nbsp;</th>
	</thead>
	<tbody style="background-color: rgba(255, 255, 255, 0.6);">
		<?php 

		$control->consultarpqrControlador();
		$control->eliminarpqrControlador();

		?>
	</tbody>


</table>