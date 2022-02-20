<?php
include("../php/conexion.php");
$conexion = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM profesores WHERE id_profesor='$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/estiloAbm.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <body>
        <header>
            <div class="contenedor_home">
                <a href="bienvenido.php">
                    <img id="logo" src="../assets/images/cropped-onlylogo-1.png"></a>
                <p class="nombre-instituto">Instituto Superior Manuel Belgrano</p>

            </div>
        </header>

        <main>
            <section id="banner">
                <p>
                    Actualizar datos
                </p>
            </section>
            <div class="container mt-5">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id_profesor" value="<?php echo $row['id_profesor'] ?>">

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>">
                    <input type="number" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni'] ?>">
                    <input type="number" class="form-control mb-3" name="puntos" placeholder="Puntos" value="<?php echo $row['puntos'] ?>">
                    <input type="submit" name="btnguardar" class="btn btn-primary btn-block" value="Actualizar">                      
                </form> 
            </div>                    
        </main> 
    </body>
</html>