

<?php

// 22.traemos la bd

include('db.php');

// 23. comprobaciones que debe realizar cuando recibamos un ID por mtodo GET . SI ID EXISTE :


if (isset($_GET['id'])) {

    // guarda el id en una variable 

    $id = $_GET['id'];

    // 24. BORRAMOS  la consulta de la tabla cuyo id coincida con el que recibimos via GET

    $query = "DELETE  FROM eventos WHERE id = $id";

    $result = mysqli_query($conn, $query);
    
        if(!$result){

        die("Query Failed");

    }

    
    $_SESSION['message'] = 'Registro borrado correctamente';
    $_SESSION['message_color'] = 'danger';

    header("Location: index.php");



}



?>