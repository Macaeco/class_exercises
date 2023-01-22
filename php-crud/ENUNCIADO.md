1. Hay que diseñar un formulario de registro para distintos eventos de una feria.
2. El formulario debe contener: fecha de inscripcion, nombre, apellido, fecha de nacimiento, correo electronico, intereses, intereses, plaza hotelera
3. guardar toda la información
4. Mostrar una tabla con los asistentes a un evento


nombre tabla: crup_ejericio
nombre tabla: eventos
-fecha de inscripción, nombre, correo electronico, intereses, id. 

1.  localhost/my_proyect en el navegador para epezar. localhost:80/phpmyadmin para la bbdd 
2. crear  la bbdd
3. conexion php: biblioteca mysqli :  parametros: donde esta el servidor de la bbdd,usuario, contraseña, nombre de la tabla - DB-PHP
4.  requerir la conexion -INDEX
5. traerme desde header el header: y el footer- INDEX
6. crear el formulario con html -INDEX
7. decimos a donde queremos enviar lo que guardemos en nuestro formulario, y por qué método queremos enviarlo, el POST - INDEX
8. validar que estamos recibiendo los datos desde el index.php. SI EXIXTE , A TRAVES DEL METODO POST, UN VALOR LLAMADO SAVE TASK, ES QUE ESTOY RECIBIENDO CORRECTAMENTE LOS DATOS DEL FORMULARIO , entonces hazme lo siguiente - GUARDAR
9. queremos recibir atraves del name la informacion del formulario - GUARDAR
10. me traigo la conexion a la bdd - GUARDAR
11.  GUARDAMOS LA INFORMACION EN LA BBDD: le decimos que : INSERTE dento de la tabla EVENTOS,los siguientes VALORES: COMBRE; CORREO E INTERESES, y MANDO LOS VALORES / creamos la consulta- GUARDAR
12. desde la libreria almaceno los datos, creo una consulta, tengo que darle la cadena de conexion , CONN, que lo importo de db php, y la consulta, Query- GUARDAR
13. hacemos una comprobacion para saber si nuestra app ha funcionado, si no funciona, termina con nuestra app. -GUARDAR 
14. Si nuestra app funciona, redirigimos a index.php- GUARDAR

15.  CREAMOS UNA SESSION PARA MANDAR EL MENSAJE DE 'GUARDADO'. Por defecto el protocolo http es stateless, que no tiene estados, si guardamos una tarea ateriormente, y cambiamos de pagina, estas dos paginas no tienen conocimiento ni comunicacion una de ellas. para comunicarlas podemos crear una SESISION
 Una sesión en PHP es una serie de caracteres aleatorios que forman una identificación única para cada visitante (a la que llamaremos "id de sesión"). Cuando a un usuario se le asigna un id de sesión, el servidor web crea un archivo en su sistema donde irá introduciendo todos los datos que queramos guardar. -BD

 16. para mandar el mensaje de Guardado, voy a guardar el valor en la session ya inicializada - GUARDAR

 17. COMPROBACION PARA EL MENSAJE DE ALERT.  si en mi sesion exixte un dato con la Key 'message', pinta lo siguiente.  INDEX

 18. LIMPIAMOS LA SESION POR QUE YA HEMOS VISTO EL MENSAJE : INDEX

 19. DISEÑAMOS LA TABLA QUE VAMOS A PINTAR -INDEX

 20. PINTAMOS LOS DATOS.  LLAMADA  DE LOS EVENTOS BD. traemos desde la bd los datos de los eventos- INDEX

 21. CREAMOS LAS ACCIONES DE NUESTRO CRUD - EDIT Y DELETE cuando le damos a los botones de edit y delete, queremos que nos redirija a al archivo de delete.php o delete.php para que lo ejecute, por lo que lo ponemos en el href del <a></a>.  
ademas como queremos editar algo, tengo que decirle a mi app QUÉ dato quiero editar, por lo que le tengo que pasar el valor de ID a mi consulta - INDEX

22. traemos la bd BORRAR

23. comprobaciones que debe realizar cuando recibamos un ID por mtodo GET . SI ID EXISTE -BORRAR

24. BORRAMOS  la consulta de la tabla cuyo id coincida con el que recibimos via GET - BORRAR


25. Nos traemos la BD  -EDITAR


26. comprobaciones que hacer si EXISTE la variable ID via GET  -EDITAR

27. SELECCIONAMOS  la consulta de la tabla cuyo id coincida con el que recibimos via GET  -EDITAR

28.  VALIDACIONES. metodo mysqli_num_rows comprueba cuantas filas tiene mi resultado. Estamos intentando comprobar que hay un resultado. y guardamos en variables los resultados para despues mostrarlos   -EDITAR

30.  VALIDACIONES.   -EDITAR

32. GUARDO LOS NUEVOS VALORES  QUE RECIBO POR EL METODO POST EN LAS VARIABLES  -EDITAR

33. ACTUALIZO LOS VALORES EN LA BD  PASANDO LA CONEXION Y LA CONSULTA  -EDITAR










