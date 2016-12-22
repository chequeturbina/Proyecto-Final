<html>
	<header>
		
	</header>
	
	<body>
		<?php	
			include ('conexion.php');
		?>

		<p>Elimina un producto</p>
		<form action='eliminarProducto2.php' method='POST'> 
		<table>
			<tr> 
			<td>
			<select name="codigo">
			<?php

			$consulta="SELECT * FROM dulce JOIN tipo ON dulce.id_tipo=tipo.id";
			$resultado=$conexion->query($consulta);	
			while($row=$resultado->fetch_assoc()) {
				$codigo=$row["nombre"];
				$im=$row["imagen"];
				$tipo=$row["tipo"];
				echo $codigo;
				echo "<option value='$codigo'>$codigo - $im - $tipo </option>";
			}

			?>
			</select>

			</tr>	
			<tr>
				<td><input type="submit" value="Eliminar" />
				</td>
			</tr>		

		</table>
			



		</form>
	</body>
</html>