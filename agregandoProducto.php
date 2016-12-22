<?php

	include('conexion.php');

	$rutaEnServidor='imagenes';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
	move_uploaded_file($rutaTemporal, $rutaDestino);

	$nombre=$_POST['cb'];
	$t=$_POST['tipo'];

	$consulta="INSERT INTO dulce(nombre, imagen, id_tipo) VALUES ('$codigo', '$nombreImagen', '$t')";
	if($conexion->query($consulta)==true) {
		echo "<a href=menuadmin.php? >Producto agregado, Regresar</a>";
	} else {
		echo "<a href=menuadmin.php? >No se pudo agregar el producto, Regresar </a>";
	}



?>