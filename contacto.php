<!DOCTYPE html>
<html>
<head>
	<title>Candy</title>
	<meta charset='utf-8' />
	<style type="text/css">
	
	 #menu {
	 	background-color:#ADEAEA;
	 	border: 10px pink solid;
	 	font-size: 30px;

	 }

	 </style>
</head>
<body background="imagenes/fondo.jpg">
   <center>
   <table id='menu'>
   <tr>
       <td id='lista1'>Inicio | </td>
       <td id='lista2'> <td> <a href='productos.php'> Productos | </a></td>
       <td id='lista3'> <td> <a href='ubicacion.php'>Ubicacion | </a> </td>
       <td id='lista4'> <td> <a href= 'contacto.php'>Contacto | </a> </td>
       <td id='lista5'><td>  <a href='administrador.php'>Administrador | </a></td>
   </table>
   </center>
  <center>
  <table>
    <?php
      $action=$_REQUEST['action'];
      if ($action=="")    /* display the contact form */
      {
      ?>
      <form  action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="action" value="submit">
      Tu nombre:<br>
      <input name="name" type="text" value="" size="30"/><br>
      Tu correo:<br>
      <input name="email" type="text" value="" size="30"/><br>
      Tu mensaje:<br>
      <textarea name="message" rows="7" cols="30"></textarea><br>
      <input type="submit" value="Enviar correo"/>
      </form>
      <?php
      } 
      else
      {
      $name=$_REQUEST['name'];
      $email=$_REQUEST['email'];
      $message=$_REQUEST['message'];
      if (($name=="")||($email=="")||($message=="")){
      echo "Es necesario que llenes el formulario completo, <a href=\"\">formulario</a>...";
      }
      else{   
        $from="From: $name<$email>\r\nReturn-path: $email";
          $subject="Message sent using your contact form";
      mail("maurichini@gmail.com", $subject, $message, $from);
      echo "¡Se envió el correo, gracias! <a href=\"\">Regresar</a>";
        }
      }  
    ?>          
  </table>
    <table>
    <tr>
      <td>
                        <!-- Meza Martinez Emmanuel -->
        <a target = "_blank" href='https://www.facebook.com/chequeturbina'><img id='im1' src='imagenes/facebook.png' width="40" height="40"></a>

        <a target = "_blank" href='https://twitter.com/cheque_emmanuel'>
        <img id='im3' src='imagenes/twitter.png' width="40" height="40"></a>
        
                        <!-- Garcia Ramos Mauricio E. -->
        <a target = "_blank" href='https://www.facebook.com/Maurichini'><img id='im1' src='imagenes/facebook.png' width="40" height="40"></a>

        <a target = "_blank" href='https://twitter.com/maurichini'>
        <img id='im3' src='imagenes/twitter.png' width="40" height="40"></a>
                        <!-- ESPACIO PARA REDES SOCIALES -->
      </td>
     </tr>
  </table>
  </center>
</body>
</html>