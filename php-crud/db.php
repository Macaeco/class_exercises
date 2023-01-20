<!-- mantiene la conexion -->

<?php

// 15. CREAMOS UNA SESSION PARA MANDAR EL MENSAJE DE 'GUARDADO'. Por defecto el protocolo http es stateless, que no tiene estados, si guardamos una tarea ateriormente, y cambiamos de pagina, estas dos paginas no tienen conocimiento ni comunicacion una de ellas. para comunicarlas podemos crear una SESISION

// Una sesión en PHP es una serie de caracteres aleatorios que forman una identificación única para cada visitante (a la que llamaremos "id de sesión"). Cuando a un usuario se le asigna un id de sesión, el servidor web crea un archivo en su sistema donde irá introduciendo todos los datos que queramos guardar.

session_start();




// 2. crear  la bbdd

// 3. conexion php: biblioteca mysqli :  parametros: donde esta el servidor de la bbdd,usuario, contraseña, nombre de la tabla


$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_ejericio'
);

//  si existe conn, es decir, si hay conexión a la bd pintame por pantalla esto : 
// if (isset($conn)){
//     echo 'DB is connected';
// }

?>






