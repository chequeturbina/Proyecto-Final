
<html>
<head>
	<title>Candy</title>
</head>
<body background="imagenes/fondo.jpg">
<?php


	include('conexion.php');
	
	echo "<table border='2'>";
	echo "<tr>";
	echo "<td>Imagen del artículo </td>";
	echo "<td>Nombre</td>";
	echo "</tr>";

	$consulta="SELECT * FROM dulce WHERE id_tipo=5";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		echo "<tr>";
		$nombre=$row["nombre"];
		$imagen=$row["imagen"];
		echo "<td><img src='imagenes/$imagen' width='100' heigth='100'/></td>";
		echo "<td>$nombre</td>";
		echo "</tr>";
	}

	echo "</table>";
	echo"<a href=productos.php? >Regresar</a>";

?>

</body>
</html>