<?php

// Definimos el usuario y la contraseña que deseamos
$pass = "pass";

// Comprobamos que la contraseña sea valida
 if ($_POST['pass']==$pass )
 {   

 // Cuando el usuario y la contraseña son correctos mostramos el contenido
 echo "<a href=menuadmin.php? >Bienvenido</a>";  

 }
 else
 {
 //Si la contraseña ingresada no es valida se vera esto
 echo '<script language="javascript">alert("Error");</script>';
 echo "<a href=administrador.php? >Regresar</a>"; 
 }
?>