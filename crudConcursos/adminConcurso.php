<?php
include("conexion.php");

$con = conectar();

$id_concurso = $_GET['id'];
//$nombre_concurso = $_POST['nombre_concurso'];
//echo $id;


$sql = "SELECT * FROM profesores";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Puntos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>

                        <form action="agregarProfesor.php" method="POST">
                            <input type="hidden" name="id_profesor" value="<?php echo $row['id_profesor'] ?>">
                            <input type="hidden" name="id_concurso" value="<?php echo $id_concurso ?>">
                            <th><?php echo $row['nombre'] ?></th>
                            <th> <?php echo $row['apellido'] ?></th>
                            <th><?php echo $row['dni'] ?></th>
                            <th><?php echo $row['puntos'] ?></th>
                            <input type="hidden" name="nombre" value="<?php echo $row['nombre'] ?>">
                            <input type="hidden" name="apellido" value="<?php echo $row['apellido'] ?>">
                            <input type="hidden" name="dni" value="<?php echo $row['dni'] ?>">
                            <input type="hidden"  name="puntos" value="<?php echo $row['puntos'] ?>">
                            <th><a href="agregarProfesor.php?id=<?php echo $row['id_profesor'] ?>" class="btn btn-info">Añadir profesor</a></th>
                            <!--<input type="submit" class="btn btn-primary btn-block" value="Agregar a concurso">-->
                        </form>

                        </tr>

                        <?php
                    }
                    ?>
                    <th></th>
                    <th></th>
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</html>
