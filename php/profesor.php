<?php
include("../php/conexion.php");
$conexion = conectar();
$sql = "SELECT * FROM profesores";
$query = mysqli_query($conexion, $sql);
?>
<htlm lang="en">
    <head>
        <title>Profesores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/estiloAbm.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
    <script type="text/javascript">
        function ConfirmDelete() {
            var respuesta = confirm("Estas seguro que desea eliminar este profesor?");
            if (respuesta) {
                return true;

            } else {
                return false;
            }
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
                    Gestión de profesores
                </p>
            </section>
        <section class="contenedor-abm">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos</h1>
                    <form action="insertar.php" method="POST">
<!--                        <input type="text" class="form-control mb-3" name="id_profesor" placeholder="id_profesor">-->
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                        <input type="number" class="form-control mb-3" name="dni" placeholder="Dni">
<!--                        <input type="text" class="form-control mb-3" name="puntos" placeholder="puntos">-->
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>DNI</th>
                                <th>Puntos</th>
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
                                    <th><?php echo $row['id_profesor'] ?></th>
                                    <th><?php echo $row['nombre'] ?></th>
                                    <th><?php echo $row['apellido'] ?></th>
                                    <th><?php echo $row['dni'] ?></th>
                                    <th><?php echo $row['puntos'] ?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id_profesor'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="../vistas/formularioDePuntos.php?id=<?php echo $row['id_profesor'] ?>" class="btn btn-info">Calcular Puntos</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['id_profesor'] ?>" class="btn btn-danger" onclick="return ConfirmDelete()">Eliminar</a> </th>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                </table></div>
            </div>
        </section>
        <section><br><br></section>
<!--<footer>
    <div class="contenedor_home">
        <p class="copy">IESMB &copy;2022 IES "Manuel Belgrano"</p>
        <div class="sociales">
            <a class="icon-facebook" href="https://www.facebook.com/iesmbrodeo"></a>
            <a class="icon-instagram" href="https://www.instagram.com/ies9008manuelbelgrano/"></a>
            <a class="icon-location" href="https://www.google.com/maps/place/IES+9-008+Manuel+Belgrano+-+Sede+Godoy+Cruz
            /@-32.911132,-68.845948,18z/data=!4m5!3m4!1s0x0:0x8bd4ca97336e5fdb!8m2!3d-32.9111323!4d-68.8459484?hl=es-AR"></a>
        </div>
    </div>
</footer>-->
    </body>
</htlm>


