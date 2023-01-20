<?php

// 25. Nos traemos la BD

include('db.php');

// 26.comprobaciones que hacer si EXISTE la variable ID via GET

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // 27. SELECCIONAMOS  la consulta de la tabla cuyo id coincida con el que recibimos via GET


    $query = "SELECT * FROM eventos WHERE id = $id";

    $result = mysqli_query($conn, $query);



    // 28.  VALIDACIONES. metodo mysqli_num_rows comprueba cuantas filas tiene mi resultado. Estamos intentando comprobar que hay un resultado. y guardamos en variables los resultados para despues mostrarlos 
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $correo = $row['correo'];
        $intereses = $row['intereses'];

    }

    // 30.  VALIDACIONES. 


    if (isset($_POST['update'])) {


        // 32.GUARDO LOS NUEVOS VALORES  QUE RECIBO POR EL METODO POST EN LAS VARIABLES

        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $intereses = $_POST['intereses'];

        //33.ACTUALIZO LOS VALORES EN LA BD  PASANDO LA CONEXION Y LA CONSULTA

        $query = "UPDATE EVENTOS set nombre = '$nombre', correo = '$correo', intereses ='$intereses'  WHERE id = $id";
        mysqli_query($conn, $query);
        $result = mysqli_query($conn, $query);

        if (!$result) {

            die("Query Failed");

        }


        $_SESSION['message'] = 'Registro actualizado correctamente';
        $_SESSION['message_color'] = 'warning';

        header("Location: index.php");
    }










}
?>

<!-- 29. CREAMOS EL FORMULARIO PPARA INTRODUCIR EL NUEVO VALOR DEL FORM -->

<?php include("includes/header.php") ?>

<div class="containter my-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">


                <!-- 30. vamos e nviar los datos a edit.php  y el id -->

                <form action="editar_registro.php?id=<?php echo $_GET['id']; ?> " method="POST">
                    <div class="form-group m-4">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control"
                            placeholder="Update Title">
                    </div>
                    <div class="form-group m-4">

                        <input type="text" name="correo" value="<?php echo $correo; ?>" class="form-control"
                            placeholder="Update Title">

                    </div>
                    <div class="form-group m-4">

                        <input type="text" name="intereses" value="<?php echo $intereses; ?>" class="form-control"
                            placeholder="Update Title">

                    </div>
                    <button class="btn btn-success m-4" name="update">GGUARDAR CAMBIOS</button>
                </form>

            </div>

        </div>

    </div>
</div>


<?php include("includes/footer.php") ?>