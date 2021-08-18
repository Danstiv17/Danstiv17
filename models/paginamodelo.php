<?php 

class PaginaModelo {
	
	function enlacesPaginasModelo($enlace){
		//print "1- el enlace es ".$enlace;
		//VALIDAR LOS ENLACES - LITA BLANCA
		if ($enlace == 'ingresar' ||  
			$enlace == 'inicio' ||  
			$enlace == 'registrarcomentarios' ||
			$enlace == 'salir' ||   
			$enlace == 'comentarios' ||
			$enlace == 'editarcomentario' ||
			$enlace == 'frmpqr' ||
			$enlace == 'frmpqrcons' ||
			$enlace == 'frmpqredit') {
			
			$modulo = 'views/modules/' . $enlace . '.php';
			//print "<br>2 modulo es ".$modulo;
		}
		elseif ($enlace == 'index') {
			$modulo = 'views/modules/registrar.php';
		}
		elseif ($enlace == 'ok') {
			$modulo = 'views/modules/registrar.php';
		}
		elseif ($enlace == 'oks') {
			$modulo = 'views/modules/registrarcomentarios.php';
		}
		elseif ($enlace == 'fallo') {
			$modulo = 'views/modules/ingresar.php';
		}
		elseif ($enlace == 'fallointento') {
			$modulo = 'views/modules/ingresar.php';
		}
		elseif ($enlace == 'upok' || $enlace == 'delok') {
			$modulo = 'views/modules/comentarios.php';
		}
		elseif ($enlace == 'okincons' || $enlace == 'falloincons') {
			$modulo = "views/modules/frmpqr.php";
		}
		else{
			$modulo = 'views/modules/inicio.php';
		}
	//	print "<br>3- el modulo termino en ".$modulo;
		return $modulo; 
	}

/*	public function enlacesPaginasModelo($enlace, $rol) {

		//LISTA BLANCA ////
		if($enlace == 'inicio' ||
	        $enlace == 'ingresar' ||
	    	$enlace == 'iniciomenu' ||
	    	$enlace == 'salir'){
			$modulo = "views/modules/{$enlace}.php";
		}

		elseif ($enlace == 'registrar' ||
	        $enlace == 'comentarios'  ||
	    	$enlace == 'editarcomentario') {		
	    	if($rol == 1){
				$modulo = "views/modules/comentarios/";
	    	}
			else{
				$modulo = "views/modules/editarcomentario/";
			}
			$modulo .= "{$enlace}.php";
		}

		elseif (!isset($modulo)) {
			if($rol == 1){
				$modulo = "views/modules/comentarios/";
			}
			else{
				$modulo = "views/modules/editarcomentario/";
			}

			if ($enlace == 'ok') {
				$modulo .= "registrar.php";
			}
			elseif ($enlace == 'upok' || $enlace == 'delok') {
				$modulo .= "comentarios.php";
			}
		}

		elseif ($enlace == 'logout') {
			$modulo = "views/modules/ingresar.php";
		}
		elseif($enlace == 'fallointentos'){
			$modulo = "views/modules/ingresar.php";
		}
		else{
			$modulo = "views/modules/error.php";
		}

		return $modulo;
	}*/
}
