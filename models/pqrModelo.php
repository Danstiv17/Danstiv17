<?php

require_once 'conexion.php';

class pqrModelo extends Conexion {


	
	public function registrarpqrModelo($datos, $tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(comPqrs) VALUES (:nombre)");

		$stmt -> bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);

		try {
			if($stmt->execute()){
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

	public function consultarpqrModelo($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		try{
			if($stmt->execute()){
				return $stmt->fetchAll();
			}
			else{
				return[];
			}
		}catch (PDOException $e) {
			print_r($e->getMessage());
		}
		$stmt->close();
	}


	public function consultarpqrIdModelo($id, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla Where idPqrs = :id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		
		try {
			$stmt->execute();
			return $stmt->fetch();			
		} catch (PDOException $e) {
			print_r("error ".$e->getMessage());
		}

		$stmt->close();
	}

	public function modificarpqrModelo(){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET comPqrs = :nombre WHERE idPqrs = :id");

		$stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
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

	public function actualizarpqrModelo($datos, $tabla){
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET comPqrs = :nombre WHERE idPqrs = :id");
		
		$stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
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
	
	

	public function eliminarpqrModelo($id,$tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idPqrs = :id");

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
}

?>