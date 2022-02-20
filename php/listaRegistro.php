<?php
include("conexion.php");
$conexion= conectar();


$id_concurso=$_GET['id'];
if($id_concurso){
    
$sql="SELECT * FROM registros WHERE id_concurso='$id_concurso'";

} else {
$sql="SELECT * FROM registros ";    
}
$query= mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<htlm lang="en">
    <head>
        <title>PAGINA REGISTROS</title>
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
                Resultado de concurso
            </p>
        </section>
        <section class="contenedor-abm">
            <div class="container mt-5">
                <div class="row">
            
                    <div class="col-md-8">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Espacio curricular</th>
                                    <th>Postulante</th>
                                    <th>Puntos</th>
            
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <th><?php echo $row['nombre_concurso'] ?></th>
                                        <th><?php echo $row['nombre_profesor'] ?></th>
                                        <th><?php echo $row['puntos'] ?></th>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                    </div>
                </div>

            </div>
        </section>
        <section><br><br></section>

    </body>
</htlm>
