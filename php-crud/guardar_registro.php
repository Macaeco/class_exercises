<?php

//  10. me traigo la conexion a la bdd: 

include("db.php");


// 8. validar que estamos recibiendo los datos desde el index.php, 

// 8. SI EXIXTE , A TRAVES DEL METODO POST, UN VALOR LLAMADO SAVE TASK, ES QUE ESTOY RECIBIENDO CORRECTAMENTE LOS DATOS DEL FORMULARIO , entonces hazme lo siguiente : 

if (isset($_POST['guardar_registro'])) {

// 9. queremos recibir atraves del name la informacion del formulario : 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $intereses = $_POST['intereses'];

//   11- GUARDAMOS LA INFORMACION EN LA BBDD:
    //    le decimos que : INSERTE dento de la tabla EVENTOS,los siguientes VALORES: COMBRE; CORREO E INTERESES, y MANDO LOS VALORES / creamos la consulta

    $query = "INSERT INTO eventos ( nombre, correo, intereses ) VALUES ('$name', '$email', '$intereses')";

// 12 .desde la libreria almaceno los datos, creo una consulta, tengo que darle la cadena de conexion , CONN, que lo importo de db php, y la consulta, Query

    $result = mysqli_query($conn, $query);

// 13. hacemos una comprobacion para saber si nuestra app ha funcionado, si no funciona, termina con nuestra app. 

    if(!$result){
        die("Query failed");
    }
    // echo ('guardado');
    
// 16. para mandar el mensaje de Guardado, voy a guardar el valor en la session ya inicializada
    $_SESSION['message'] = 'Registro completado correctamente';
    $_SESSION['message_color'] = 'success';

// 14. Si nuestra app funciona, redirigimos a index.php
    header("Location: index.php");





}


?>