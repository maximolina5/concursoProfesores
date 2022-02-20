<?php
include("conexion.php");
$conexion = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM concursos WHERE id_concurso='$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/estiloAbm.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">

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
                Modificación de concursos
            </p>
        </section>
        <div class="container mt-5">
            <form action="updateConcurso.php" method="POST">
                <input type="hidden" name="id_concurso" value="<?php echo $row['id_concurso'] ?>">

                <input type="text" class="form-control mb-3" name="nombre_concurso" placeholder="Nombre" value="<?php echo $row['nombre_concurso'] ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

            </form>
        </div>

    </body>
</html>