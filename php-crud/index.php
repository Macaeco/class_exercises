<!-- 1 - localhost/my_proyect en el navegador para epezar -->

<!-- 1 localhost:80/phpmyadmin para la bbdd -->

<!-- 4.  requerir la conexion: -->
<?php include("db.php") ?>

<!-- 5. traerme desde header el header: y el footer -->

<?php include("includes/header.php") ?>

<!-- 6. crear el formulario con html -->

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mt-5">

        <!-- 17. COMPROBACION PARA EL MENSAJE DE ALERT.  si en mi sesion exixte un dato con la Key 'message', pinta lo siguiente.  -->

            <?php if (isset($_SESSION['message'])) { ?>

                <!-- RESCATAMOS  EL VALOR DEL COLOR DEL ALERT -->

                <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">

                    <!-- RESCATAMOS EL VALOR DEL DATO ALMACENADO EN LA SESION  : -->

                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

        <!-- 18. LIMPIAMOS LA SESION POR QUE YA HEMOS VISTO EL MENSAJE : -->
                <?php session_unset();
            } ?>

        <!-- 7. decimos a donde queremos enviar lo que guardemos en nuestro formulario, y por qué método queremos enviarlo, el POST -->

            <form action="guardar_registro.php" method="POST">
                <div class="form-group m-3">
                    <input type="text" name="name" class="form-control" placeholder="NOMBRE USUARIO" autofocus>
                </div>

                <div class="form-group m-3">
                    <input type="email" name="email" class="form-control" placeholder="EMAIL" rows="2" autofocus>
                </div>

                <div class="form-group m-3">
                    <input type="text" name="intereses" class="form-control" placeholder="INTERESES" rows="2" autofocus>
                </div>

                <input type="submit" class="btn btn-light btn-block ms-5" name="guardar_registro" value="GUARDAR">
            </form>
        </div>

        <!-- 19.DISEÑAMOS LA TABLA QUE VAMOS A PINTAR -->

        <div class="col-md-8 mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre </th>
                        <th>Email </th>
                        <th>Fecha registro </th>
                        <th>Interés </th>
                        <th>Acciones </th>
                    </tr>
                </thead>
                <tbody>

        <!-- 20.PINTAMOS LOS DATOS.  LLAMADA  DE LOS EVENTOS BD. traemos desde la bd los datos de los eventos-->

                    <?php

                    // seleccioname de la tabla eventos:
                    
                    $query = "SELECT * FROM eventos";

                    // accedo a la conexion  CONN por que al inicio del archivo estoy importando db.php y me guardo en result events todos los eventos de  mi table. 
                    
                    $result_events = mysqli_query($conn, $query);

                    // recorro mi lista de eventos y lo guardo en una $row
                    
                    while ($row = mysqli_fetch_array($result_events)) { ?>

                        <!-- por cada $row pintame cada valor -->

                        <tr>
                            <td>
                                <?php echo $row['nombre'] ?>
                            </td>
                            <td>
                                <?php echo $row['correo'] ?>
                            </td>
                            <td>
                                <?php echo $row['intereses'] ?>
                            </td>
                            <td>
                                <?php echo $row['fecha_registro'] ?>
                            </td>

            <!-- 21. CREAMOS LAS ACCIONES DE NUESTRO CRUD - EDIT Y DELETE -->
                            <!-- cuando le damos a los botones de edit y delete, queremos que nos redirija a al archivo de delete.php o delete.php para que lo ejecute, por lo que lo ponemos en el href del <a></a>.  -->
                            <!-- ademas como queremos editar algo, tengo que decirle a mi app QUÉ dato quiero editar, por lo que le tengo que pasar el valor de ID a mi consulta -->

                            <td class="d-flex flex-row ">
                                <a class="btn btn-secondary me-1" href="editar_registro.php?id=<?php echo $row['id'] ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="btn btn-danger"  href="borrar_registro.php?id=<?php echo $row['id'] ?>">
                                    <i class="fa-solid fa-trash"></i>

                                    <!-- 22 -->

                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>








    </div>
</div>

<?php include("includes/footer.php") ?>