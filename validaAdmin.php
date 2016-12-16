<? 
   // Comparamos a ver si son correctos
if ($password=="pass"){
		$valido="si";
	}
	else{
		$valido="no";
		} 
		?>
		<html>
		<head>
		<title>Ingresar</title>
		</head>
		<body>
		<? 
		if ($valido=="si"){
			?>
			<a href = 'menuadmin.php'> Bienvenido, continuar</a>
			<? 
		}
		else{
			?>
			<a href = 'administrador.php'> Contraseña incorrecta, Regresar</a>
			<? 
			} 
			?>
			</body>
			</html>
			