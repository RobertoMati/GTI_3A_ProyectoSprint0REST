# Explicación del repositorio
En este repositorio, se guardan los archivos correspondientes al apartado REST del Sprint0 del proyecto de 3a de GTI. Aquí se encontrarán las reglas REST implementadas tanto para la parte de la aplicación Android como para la web.

Este repositorio hace funcionar correctamente a la aplicación móvil del repositorio ProyectoSprint0App y de ProyectoSprint0Web.

# ¿Necesito algún programa?
Para poder modificar los archivos descargados de este repositorio, lo más conveniente es que tengas instalado en tu dispositivo un editor de código fuente para poder visualizar correctamente los archivos. Como se verá en el siguiente apartado, también necesitaremos un sistema de gestión de base de datos.

# ¿Cómo utilizo los archivos?
Como se ha comentado anteriormente, estos archivos sirven para conectar correctamente las aplicaciones con la base de datos y realizar acciones. Para ello, se deberán seguir los siguientes pasos:

* En primer jugar, necesitamos un sistema de gestión de base de datos, en mi caso he utilizado xampp. Una vez configurado, deberemos incluir la carpeta sprint0REST dentro de la carpeta htdocs del directorio de xampp.

* Una vez incluidos los archivos en el lugar correspondiente, debemos acceder a la página de administración de base de datos para crear una, junto a la tabla correspondiente, o de lo contrario, importarla desde el archivo que está disponible en la carpeta bd.

* En mi caso, la base de datos tiene como nombre "sprint0", y la tabla, "medidas". Dicha tabla consta de tres columnas, una para el UUID del dispositivo, otra para el valor que nos envía y otra para la fecha.

* Por último, en caso de que no se hayan elegido los mismos nombres que los mencionados anteriormente, se deberán cambiar en los archivos para que la conexión se haga correctamente.

# Tests
Para comprobar el correcto funcionamiento de los archivos, se han realizado distintos tests:
* El archivo pruebaConexion.php sirve para comprobar si la conexión con el servidor se ha realizado correctamente. Para utilizarlo, debes iniciar el servidor, y, seguidamente, en el navegador, escribir [http://localhost/Sprint0REST/test/](http://localhost/Sprint0REST/test/pruebaConexion.php) y te mostrará información sobre la conexión con el servidor.
*Los otros tests son más bien pruebas de que las acciones realizadas han salido correctamente. Es posible verlas en la carpeta docs.
