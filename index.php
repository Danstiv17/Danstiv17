<?php 

	require_once('controllers/paginacontrolador.php');
	require_once('controllers/comentariocontrolador.php');
	require_once('controllers/pqrcontrolador.php');
	require_once('models/paginamodelo.php');
	require_once('models/comentariosmodelo.php');
	require_once('models/pqrmodelo.php');
	$controlador = new PaginaControlador();
	$controlador->template();

?>