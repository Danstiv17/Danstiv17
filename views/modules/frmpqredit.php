<?php 

session_start();
if (!$_SESSION['validado']) {
	header('location:index.php?action=ingresar');
	exit();
}

?>

<h1>Modificar PQRS</h1>

<form method="post">

	<?php 
	$editar = new pqrControlador();
	$editar->consultarpqrIdControlador();
	$editar->actualizarpqrControlador();
	?>

</form>