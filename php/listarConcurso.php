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
                Concursos Vigentes
            </p>
        </section>

        <div class="container mt-3">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">

                        <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nombre_concurso'] ?></h5>
                                <form action="adminConcurso.php" method="POST">
                                    <input type="hidden" name="id_concurso" value="<?php echo $row['id_concurso'] ?>">
                                    <input type="hidden" name="nombre_concurso" value="<?php echo $row['nombre_concurso'] ?>">
                                    <input type="submit" class="btn btn-primary btn-block" value="Agregar a concurso">
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?> 
            </div>



        </div>
    </body>
</htlm>

