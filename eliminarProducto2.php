<?php

	include('conexion.php');

	$c=$_POST["codigo"];
	//echo $c;

	$consulta="SELECT * FROM dulce WHERE nombre='$c'";
	$resultado=$conexion->query($consulta);	
	while($row=$resultado->fetch_assoc()) {
		$im=$row["imagen"];

	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='eliminandoProducto.php' method='post' enctype='multipart/form-data'>
		<table>
			<tr>	
				<td>Confirma que eliminas este</td>
				<td>
					<?php
						echo "<img src='imagenes/$im' width='50' height='100' />";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Confirmar">
				</td>
			</tr>
			<input type="hidden" name="codigoB" value=<?php echo $c; ?>>


		</table>

	</form>


</body>
</html>



