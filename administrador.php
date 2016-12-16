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
    #menuCont {
    background-color: #ffffff;
    border: 2px red solid;
   }

   </style>
</head>
<body background="imagenes/fondo.jpg">
   <center>
   <table id='menu'>
   <tr>
       <td id='lista1'><td><a href='index.php'>Inicio | </a></td>
       <td id='lista2'>Productos | </td>
       <td id='lista3'><td><a href='ubicacion.php'>Ubicacion | </a></td>
       <td id='lista4'> <td> <a href= 'contacto.php'>Contacto | </a> </td>
       <td id='lista5'><td> <a href='administrador.php'>Administrador | </a></td>
   </tr>   
   </table>
   </center>
   <center>
   <form method="POST" action="validaAdmin.php">
   Password: <input type="password" name="password" size="10"><br>
   <input type="submit" value="Enviar" name="privado">
  </center>
</body>
</html>