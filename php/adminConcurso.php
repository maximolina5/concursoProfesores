<?php
include("conexion.php");

$conexion = conectar();

$id_concurso = $_POST['id_concurso'];
$nombreProfesor = $_POST['nombre_concurso'];
//$nombre_concurso = $_POST['nombre_concurso'];
//echo $id;


$sql = "SELECT * FROM profesores";
$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/estiloAbm.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
        <script type="text/javascript">
            function ConfirmAction() {
                alert("Profesor añadido exitosamente");
            }
        </script>
    </head>
    <body>
        <header>
            <div class="contenedor_home">
                <a href="../vistas/bienvenido.php">
                    <img id="logo" src="../assets/images/cropped-onlylogo-1.png"></a>
                <p class="nombre-instituto">Instituto Superior Manuel Belgrano</p>
            </div>
        </header>
        <section id="banner">
            <p>
                Candidatos
            </p>
        </section>
        <div class="container mt-5">
            <div class="row" >
                <div class="col-md-12">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>DNI</th>
                                <th>Puntos</th>
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
                                <input type="hidden" name="id_concurso" value="<?php echo $id_concurso; ?>">
                                <input type="hidden" name="nombre_concurso" value="<?php echo $nombreProfesor; ?>">
                                <th><?php echo $row['nombre'] ?></th>
                                <th> <?php echo $row['apellido'] ?></th>
                                <th><?php echo $row['dni'] ?></th>
                                <th><?php echo $row['puntos'] ?></th>
                                <input type="hidden" name="nombre" value="<?php echo $row['nombre'] ?>">
                                <input type="hidden" name="apellido" value="<?php echo $row['apellido'] ?>">
                                <input type="hidden"  name="puntos" value="<?php echo $row['puntos'] ?>">
                                <th><input type="submit" class="btn btn-primary btn-block" value="Agregar a concurso" onclick="return ConfirmAction()"></th>
                            </form>

                            </tr>

                            <?php
                        }
                        ?>
                      
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </body>
</html>
