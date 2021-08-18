<?php 

require_once '../../controllers/controlador.php';
require_once '../../models/comentariosmodelo.php';

class Ajax {
	
	public $comentarioValidar;
	public $emailValidar;

	///METODO PARA VALIDAR comentarioS REPETIDOS
	public function validarcomentarioAjax() {
		
		$dato = $this->comentarioValidar;

		$respuesta = Controlador::validarcomentarioControlador($dato);

		print $respuesta;
	}

	///METODO PARA VALIDAR EMAIL REPETIDO
	public function validarEmailAjax(){

		$dato = $this->emailValidar;

		$respuesta = Controlador::validarEmailControlador($dato);

		print $respuesta;
	}
}

//////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['varcomentario'])) {
	$ajaxcomentario = new Ajax();
	$ajaxcomentario->comentarioValidar = $_POST['varcomentario'];
	$ajaxcomentario->validarcomentarioAjax();
}

if (isset($_POST['varEmail'])) {
	$ajaxEmail = new Ajax();
	$ajaxEmail->emailValidar = $_POST['varEmail'];
	$ajaxEmail->validarEmailAjax();
}

