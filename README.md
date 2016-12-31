

Meza Martinez Emmanuel
No.Cuenta: 311309649
mezamartinezzz@ciencias.unam.mx


Para empezar a usar el proyecto se tiene que abrir mysql y crear una base de datos llamada "sucursal" o cualquier otra modificando el archivo 'conexion.php'.

se tendra que correr como el proyecto MYP de la maestra... abriendo una terminal y haciendo la base y en otra conectarla con la base del pryecto.

la pagina principal 'index.php' contiene lo que se ve al inicio.

1.Ubicación (ubicacion.php)

contiene la ubicacion de la tienda, que es la pagina de google maps mostrando una plaza

2.Contacto (contacto.php)

es la parta en donde el usuario puede hacer preguntas de cualquier tipo, se tiene que ingresar su nombre, correo, y la pregunta.... el boton enviar; enviara al correo de nosotros.
Esta pagina igual contiene dos links, facebook y twitter de nostros dos.

3.Productos (productos.php, bombones.php, chicles.php, caramelos.php, paletas.php, gomitas.php, chocolates.php)

producto.php es el archivo principal de esta pestaña que mostrara una imagen por cada tipo de produto en la tienda; cada imagen servira como un enlace para mostrar una tabla con los productos correspondientes a cada tipo, cada imagen manda al archivo correspondiente como la imaben de chocolates usa chocolates.php y asi con las demas

4.Administrador (Administrador.php, Validaadministrador.php, menuadmin.php)

Esta parte es solo para trabajadores y pedira la contraseña 'pass', para mandarnos al menu del usuario y las funciones que podra realizar.

Como ejemplo la base ya contiene 6 productos de cada tipo.
  
    3.1 Agregar (agregar.php, agregando.php, conexion.php)

         parte de la pagina para agregar productos por nombre, imagen del producto, y las opciones de que tipo es el dulce, si agrega correctamente o no nos mandara un mensaje.
         Entre los productos que se pueden agregar son gomitas, chocolates, caramelos, paletas, chicles y bombones.

    NOTA: No pude guardar la imagen en la carpeta correspondiente, cuando seleccionas la imagen no la guarda en una carpeta de destino no supe como corregir ese problema o si era de la propia base. Por lo que no muestra la imagen pero los demas datos si los guarda.
  
    3.2 Ver Todo (verTodo.php)

         se podran ver en una tabla todos los productos ordenados por imagen, y nombre

    3.3 Eliminar (EliminarProducto.php, EliminarProducto2.php, Eliminandoproducto.php)

         para eliminar un producto se debera escoger por el nombre de la imagen que contenga, se escogera uno y al presionar el boton eliminar, preguntara si desea eliminarlo o no 

    3.4 Salir

        Sale del menu administrador para mandarte a la pagina principal

En patrones de diseño usamos los mas simples que es para ahorrar codigoo en los archivos, 'conexion.php' sirve para la mayoria de los archivos de administrador; solo contiene la conexion a la base de datos.... y hay archivos para seguir ahorrando codigo como en agregar, 'agregando.php' contiene el llamado php para agregar el producto a la base.

'Eliminarproducto2.php' es la pregunta que nos hace para saber si queremos eliminar o no el articulo y por ultimo utiliza 'Eliminandoproducto.php' para quitarlo de la base.



------------------------------- NOTA -----------------------------

Mi compañero Mauricio Garcia Ramos no fue de mucha ayuda como esperaba, aunque el realizo la pestaña de contacto. todo lo demas lo hice por mi cuenta, solo queria aclarar ese punto.
Por lo que pido que se tome en cuenta esto al momento de la calificacion.
