<html>
<head>
	<title>Candy</title>
	<meta charset='utf-8' />
</head>
<body background="imagenes/fondo.jpg">
<form action='agregandoProducto.php' method='POST' enctype='multipart/form-data'>
	<center>
	<table>
		<tr>
			<td>Nombre</td>
			<td><input type='text' name='cb' /></td>
		</tr>
		<tr>
			<td>Fotografía</td>
			<td><input name='imagen' type='file' /></td>
		</tr>
		<tr>
		<td>Tipo</td>
		<td>
		<select name="tipo">
		<?php
		
		include('conexion.php');

		$consulta="SELECT * FROM tipo";
		$resultado=$conexion->query($consulta);	
		while($row=$resultado->fetch_assoc()) {
			$id=$row["id"];
			$n=$row["nombrea"];
			echo "<option value='$id'>$n </option>";	
		}
	
		?>
		</select>
		</td>
		<tr>
			<td></td>
			<td><input type="submit" value="Aceptar"/>
		</tr>

	</table>
	</center>
</form>
<body>
</body>
</html>
