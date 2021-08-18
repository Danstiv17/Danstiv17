<?php 

session_start();

if(isset($_SESSION['rol'])){
	if($_SESSION['rol'] == 1){
?>
	<nav>
		<ul>
			<li><a href="inicio">comentarios</a></li>
			<!--<li><a href="ingresar">Ingresar</a></li>-->
			<li><a href="registrar">Registrar</a></li>
			<li><a href="comentarios">Consultar</a></li>
			
		</ul>
	</nav>
<?php 
	}
	elseif($_SESSION['rol'] == 2){
?>

	<nav>
		<ul>
		    
			<!--<li><a href="ingresar">Ingresar</a></li>-->
			<li><a href="registrar">Registrar</a></li>
			<li><a href="comentarios">Consultar</a></li>
			
		</ul>
	</nav>

<?php 
	}
}
?>