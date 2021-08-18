<!DOCTYPE html>
<html>
<head>
	<title>Tocaimapp</title>
	<link rel="stylesheet" href="views/css/main.css">
	<script type="text/javascript" src="views/js/jquery-3.5.1.js"></script>
</head>
<style type="text/css">	body {
		font-family: Berlin Sans FB;
		font-size: 20px;
		background-color: #85C1E9;
	}	</style>
<body>
	<header>
		<table>
			<tr>
				<td><h1 align="left" style="margin-top: 0px;margin-bottom: 0px;"><img src="public/imgs/logo2.png" height="48" width="215"></h1></td>
			</tr>
		</table>
	</header>
	<nav>
		<?php 

			include("views/modules/navegacion.php");

		?>
	</nav>
	<section>
		<?php 

		$controlador = new PaginaControlador();
		$controlador->enlacesPaginasControlador();


		?>
	</section>
	<script type="text/javascript" src="views/js/validar.js"></script>
</body>
</html>