<?php 

class comentarioControlador {

	///METODO PARA REGISTRAR comentarioS///
	public function registrarcomentarioControlador(){
		
		if(isset($_POST['comentario'])){

			/*VALIDAR comentario*/
			$datos = array("comentario"=>$_POST['comentario']);

			$respuesta = new ComentariosModelo;
			$res = $respuesta->registrarcomentariosModelo($datos, 'comentarios');

			if($res == 'success'){
				header('Location:oks');
			}
			else{
				header("location:index.php");
			}
		}
	}

	public function logincomentarioControlador(){

		print "login";


		session_start();
		$_SESSION['validado'] = true;

		header("location:comentarios");
	}

	public function consultarcomentariosControlador(){

		$obj = new comentariosModelo();
		$respuesta = $obj->consultarcomentariosModelo('comentarios');

		

		foreach ($respuesta as $row => $valor) {

			print "<tr>
						<td>{$valor['registrarcomentario']}</td>
						<td><a href='index.php?action=editarcomentario&id={$valor['idcomentario']}'><button class=editar>Editar</button></a></td>

						<td><a href='index.php?action=comentarios&del={$valor['idcomentario']}'><button class=eliminar>Eliminar</button></a></td>
					</tr>";		
		}
	}


	public function consultarcomentarioIdControlador(){
		$id = $_GET['id'];
		$datos = comentariosModelo::consultarcomentarioIdModelo($id, 'comentarios');
		print '	
				<input type="hidden" name="idModificar" value="'.$datos["idcomentario"].'">	
				<label for="nombre">Nuevo Comentario</label>
				<input type="text" name="nombreModificar" value="' . $datos["registrarcomentario"] . '" placeholder="ingrese un comentario" required>
				<br>
				<br>
				<p style="text-align: center;  width: 360px;">
				<input style="padding-left: 18px" class="button button2" type="submit" name="enviar" value="&nbsp;&nbsp;&nbsp;Actualizar">
				</p>
			';
	}

	public function actualizarcomentarioControlador(){
		if (isset($_POST['idModificar'])) {

			print "valor id".$_POST['idModificar'];

			$datos = array('id' => $_POST['idModificar'],
							'comentario' => $_POST['nombreModificar']);
		var_dump($datos);
		
			$respuesta = comentariosModelo::actualizarcomentarioModelo($datos, 'comentarios');

			if($respuesta == 'success'){
				header("location:upok");
			}
			else{
				print "error";
			}
		}
	}

	public function eliminarcomentarioControlador(){

		if (isset($_GET['del'])) {
			$id = $_GET['del'];

			$respuesta = comentariosModelo::eliminarcomentarioModelo($id,'comentarios');

			if ($respuesta == 'success') {
				header('location:delok');
			}
		}

	}

	///METOD PARA VALIDAR comentarioS REPETIDOS:
	public function validarcomentarioControlador($dato){

		$respuesta = comentariosModelo::validarcomentarioModel($dato,'comentarios');

		if($respuesta){
			return 1;
		}
		else{
			return 0;
		}
	}

	///METODO PARA VALIDAR EL CORREO REPETIDO.
	public function validarEmailControlador($dato){

		$respuesta = comentariosModelo::validarEmailModel($dato,'comentarios');

		if ($respuesta) {
			return 1;
		}
		else{
			return 0;
		}
	}

}

