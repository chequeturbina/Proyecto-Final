<?php

	include('conexion.php');
	
	$codigo = $_POST["codigoB"];

	ECHO $codigo;

	$consulta="DELETE FROM dulce WHERE nombre='$codigo'";
	if($conexion->query($consulta)==true) {
		echo "<a href=menuadmin.php? >Producto ELIMINADO exitosamente, Regresar </a>";
	} else {
		echo "<a href=menuadmin.php? >No se pudo eliminar el producto, Regresar </a>";
	}





?>