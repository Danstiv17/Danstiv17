<?php 

	session_start();
	if(isset($_SESSION['validado'])){
		$msg = "El comentario: " . $_SESSION['comentario'] . "<br>ha cerrado sesion";
	}
	else{
		$msg = "Señor comentario usted no ha inicado sesion";
	}

	session_destroy();

	header('location:index.php');
?>

<h1><?php print $msg; ?></h1>
