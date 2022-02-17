<?php
include ("conexion.php");
$con = conectar();
$sql = "SELECT * FROM concursos";
$query = mysqli_query($con, $sql);
?>

<<!DOCTYPE html>
<htlm lang="en">
    <head>
        <title>PAGINA CONCURSO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

    </head>
    <script type="text/javascript">
        function ConfirmDelete() {
            var respuesta = confirm("Estas seguro que desea eliminar este concurso?");
            if (respuesta) {
                return true;

            } else {
                return false;
            }
        }
    </script>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id_concurso" placeholder="id_concurso">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <th><?php echo $row['id_concurso'] ?></th>
                                    <th><?php echo $row['nombre'] ?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id_concurso'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="listar.php?id=<?php echo $row['id_concurso'] ?>" class="btn btn-info">Consultar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['id_concurso'] ?>" class="btn btn-danger" onclick="return ConfirmDelete()">Eliminar</a> </th>
                                </tr>
                                <?php
                            }
                            ?>
                        <th></th>
                        <th></th>
                        </tbody>
                </div>
            </div>

        </div>
    </body>
</htlm>

</html>

