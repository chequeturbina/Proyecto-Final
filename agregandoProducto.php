<?php

	include('conexion.php');

	$nombreImagen=$_FILES['imagen']['name'];
	$ruta = 'imagenes'.'/'.$nombreImagen;
	$nombre=$_POST['cb'];
	$t=$_POST['tipo'];
	
	move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
	

	$consulta="INSERT INTO dulce(nombre, imagen, id_tipo) VALUES ('$nombre', '$nombreImagen', '$t')";
	
	if($conexion->query($consulta)==true) {
		echo "<a href=menuadmin.php? >Producto agregado, Regresar</a>";
	} else {
		echo "<a href=menuadmin.php? >No se pudo agregar el producto, Regresar </a>";
	}



?>