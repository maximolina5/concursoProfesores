<?php
include("conexion.php");
$con= conectar();

$id=$_GET['id'];

$sql="SELECT * FROM profesores WHERE id_profesor='$id'";
$query=mysqli_query($con, $sql);
    
$row= mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <<title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
        
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="update.php" method="POST">
                <input type="hidden" name="id_profesor" value="<?php echo $row['id_profesor']?>">
                
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']?>">
                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']?>">
                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']?>">
                <input type="text" class="form-control mb-3" name="puntos" placeholder="Puntos" value="<?php echo $row['puntos']?>">
                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                
            </form>
        </div>
        
    </body>
</html>