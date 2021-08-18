<?php

class pqrControlador{
	
	///mértodo para registrar sitios turísticos///
	public function registrarpqrControlador(){
		if (isset($_POST['registrarcons'])) {
			
			$datos = array('nombre' => $_POST['nombre']);
			$objetos = new pqrModelo();
			$respuesta = $objetos->registrarpqrModelo($datos, 'pqrs');

			if ($respuesta == 'success'){
				header('location:okincons');
			}
			else{
				header('location:falloincons');
			}
		}
	}

	public function consultarpqrControlador(){
		
		$obj = new pqrModelo();
		$respuesta = $obj->consultarpqrModelo('pqrs');

		foreach ($respuesta as $row => $valor){

			print "<tr>
			<td>{$valor['idPqrs']}</td>
			<td>{$valor['comPqrs']}</td>

			<td><a href='index.php?action=frmpqredit&idpqrs={$valor['idPqrs']}'><button class=editar>Editar</button></a></td>

			<td><a href='index.php?action=frmpqrcons&del={$valor['idPqrs']}'><button class=eliminar>Eliminar</button></a></td>
			</tr>";
		}
	}



	public function consultarpqrIdControlador(){
		$id = $_GET['idpqrs'];
		$obj = new pqrModelo;
		$datos = $obj->consultarpqrIdModelo($id, 'pqrs');
		print '

		<input type="hidden" name="idModificar" value="'. $datos["idPqrs"].'">	
		<label for="nombre">PQRS</label>
		<input type="text" name="nombreModificar" value="' . $datos["comPqrs"] . '" placeholder="Ingrese el pqrs" required>
		<br>
		<br>
		<p style="text-align: center;  width: 360px;">
		<input style="padding-left: 18px" class="button button2" type="submit" name="enviar" value="&nbsp;&nbsp;&nbsp;Actualizar">
		</p>
		 ';
	}

	public function actualizarpqrControlador(){
		if (isset($_POST['idModificar'])) {

			$datos = array('id' 		=> $_POST['idModificar'],
				'nombre' 	=> $_POST['nombreModificar'],
			);

			$respuesta = pqrModelo::actualizarpqrModelo($datos, 'pqrs');

			if($respuesta == 'success'){
				header("location:frmpqrcons");
			}
			else{
				print "error";
			}
		}
	}

			public function eliminarpqrControlador(){
				if (isset($_GET['del'])) {
					$id = $_GET['del'];

					$respuesta = pqrModelo::eliminarpqrModelo($id,'pqrs');

					if ($respuesta == 'success') {
						header('location:frmpqrcons');
					}
				}
			}
		}
?>