<?php 

class PaginaControlador {

	///METODO PARA CARGAR PLANTILLA///
	
	public function template() {
		include "views/template.php";
	}

	public function enlacesPaginasControlador(){

		//print "el valor del get es ".$_GET['action']."<br>";
		
		if (isset($_GET['action'])) {
			$enlace = $_GET['action'];
		}
		else{
			$enlace = 'ingresar';
		}

		if(isset($_SESSION['rol'])){
			$rol = $_SESSION['rol'];
		}
		else{
			$rol = 1;
		}

	//	print "8- enlace get ".$enlace ."<br>";

		$respuesta = new PaginaModelo();
		$pagina = $respuesta->enlacesPaginasModelo($enlace);

		//print "10 - pagina es ".$pagina;
		include("$pagina");
	}

}

