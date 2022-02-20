<?php
$puntosA = $_POST['puntosA'];
$puntosB = $_POST['puntosB'];
$puntosC = $_POST['puntosC'];
$totalPuntos = $_POST['totalPuntos'];
?>
<html>
    <head>
        <title>Puntos Totales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
              rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/estiloFormulario.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
    </head>
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
                    Plantilla tabulacion de antecedentes
                </p>
            </section>
            <section>
                <form action="profesor.php">
                    <table>
                        <thead>
                            <tr>
                                <th>Total A. título</th>
                                <th class="thbox"></th>
                                <th class="thbox"><?php echo "$puntosA"; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Total B. Formacion posterior al título base</th>
                                <th class="thbox"></th>
                                <th class="thbox"><?php echo "$puntosB"; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Total C. Antigüedad docente</th>
                                <th class="thbox"></th>
                                <th class="thbox"><?php echo "$puntosC"; ?></th>
                            </tr>
                        </thead>

                        <tr>
                            <th>Total</th>
                            <th class="thbox"></th>
                            <th class="thbox"><?php echo "$totalPuntos"; ?></th>
                        </tr>
                    </table>
                    <input type="submit" value="Finalizar">
                </form>
            </section>
    </body>
</html>
