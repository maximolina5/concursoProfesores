<?php
include("conexion.php");
$conexion = conectar();
$sql = "SELECT * FROM concursos";
$query = mysqli_query($conexion, $sql);
$nombre_concurso;
$id_concurso;
?>
<!DOCTYPE html>
<htlm lang="en">
    <head>
        <title>CONCURSOS VIGENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-5">

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                       <form action="adminConcurso.php" method="POST">

                        <tr>
                            <th><?php echo $row['id_concurso'] ?></th>
                            <th><?php echo $row['nombre_concurso'] ?></th>
                        <input type="hidden" name="id_concurso" value="<?php echo $row['id_concurso'] ?>">
                            <input type="hidden" name="nombre_concurso" value="<?php echo $row['nombre_concurso'] ?>"
                        <br/>
<!--                            <th><a href="adminConcurso.php?id=<?php echo $row['id_concurso'] ?>" class="btn btn-info">Ver más</a></th>-->
                        </tr>
                        <br/>
                        <input type="submit" class="btn btn-primary btn-block" value="Agregar a concurso">
                       </form>
                        <?php
                    }
                    ?>

                    <th></th>
                    <th></th>
        </div>
    </body>
</htlm>

