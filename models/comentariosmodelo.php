<?php 

require_once('conexion.php');

class ComentariosModelo extends Conexion {
	
	public function registrarcomentariosModelo($datos, $tabla)	{
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (registrarcomentario) VALUES (:x)");

		$stmt->bindParam(":x", $datos['comentario'], PDO::PARAM_STR);

		try {
			if($stmt->execute()){
				return "success";
			}
			else{
				return "error";
			}
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();
	}

	public function logincomentarioModelo($datos, $tabla){

		$stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuNombre = :nombre");
		$stmt->bindParam(":nombre", $datos['nombre']);

		try {
			
			$stmt->execute();

			return $stmt->fetch();

		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();
	}


	public function consultarcomentariosModelo($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		
		try {
			
			if($stmt->execute()){

				return $stmt->fetchAll();

			}
			else{

				return [];

			}

		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}

	public function consultarcomentarioIdModelo($id, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idcomentario = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		try {
			$stmt->execute();
			return $stmt->fetch();			
		} catch (PDOException $e) {
			print_r("error ".$e->getMessage());
		}

		$stmt->close();
	}


	public function modificarcomentarioModelo(){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET registarcomentarios = :comentario WHERE idcomentario = :id");

		$stmt->bindParam(':comentario', $datos['comentario'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		try {
			if ($stmt->execute()) {
				return 'success';
			}
			else{
				return 'error';
			}			
			
		} catch (PDOException $e) {
			print_r("error ".$e->getMessage());
		}

		$stmt->close();
	}








	public function actualizarcomentarioModelo($datos, $tabla){
		$stmt = Conexion::conectar()->prepare("UPDATE comentarios SET registrarcomentario=:comentario WHERE idcomentario=:id");

		$stmt->bindParam(':comentario', $datos['comentario'], PDO::PARAM_STR);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		try {
			if ($stmt->execute()) {
				return 'success';
			}
			else{
				return 'error';
			}			
			
		} catch (PDOException $e) {
			print_r("Error ".$e->getMessage());
		}
		$stmt->close();
	}


	public function eliminarcomentarioModelo($id,$tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idcomentario = :id");

		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		try {
			if ($stmt->execute()) {
				return 'success';
			}
			else{
				return "error";
			}
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();
	}

	public function actualizarIntentosModelo($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE registrarcomentarios = :comentario");

		$stmt->bindParam(':intentos', $datos['numIntentos'], PDO::PARAM_INT);

		$stmt->bindParam(':comentario', $datos['comentario'], PDO::PARAM_STR);

		try {
			if($stmt->execute()){
				return 'success';
			}
			else{
				return 'error';
			}
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();
	}

	///METODO PARA comentarioS REPETIDOS:

	public function validarcomentarioModel($dato,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT registrarcomentarios FROM $tabla 
			WHERE registrarcomentarios = :nombre");

		$stmt->bindParam(':nombre', $dato, PDO::PARAM_STR);

		try {
			if($stmt->execute()){
				return $stmt->fetch();
			}
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();

	}

	//METODO PARA BUSCAR CORREOS REPETIDOS;
	public function validarEmailModel($dato,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuEmail FROM $tabla
			WHERE usuEmail = :email");

		$stmt->bindParam(":email", $dato, PDO::PARAM_STR);

		try {
			
			if($stmt->execute()){
				return $stmt->fetch();
			}


		} catch (PDOException $e) {
			print_r($e->getMessage());
		}

		$stmt->close();

	}
}
