
<html>
<head>
	<title></title>
</head>
<body>
<?php


	include('conexion.php');
	
	echo "<table border='2'>";
	echo "<tr>";
	echo "<td>Imagen del artículo </td>";
	echo "<td>Nombre</td>";
	echo "</tr>";

	$consulta="SELECT * FROM dulce JOIN tipo ON dulce.id_tipo=tipo.id";
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

?>

</body>
</html>
