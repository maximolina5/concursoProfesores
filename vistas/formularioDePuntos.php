<?php
$puntosA = '0';
if (isset($_POST['puntosA'])) {
    $puntosA = implode(' ', $_POST['puntosA']);
}

$puntosB = '0';
if (isset($_POST['puntosB'])) {
    $puntosB = implode(' ', $_POST['puntosB']);
}
$puntosC = '0';
$totalPuntos = '0';
if (isset($_POST['btnenviar'])) {
    $puntosC1 = $_POST['puntosC1'];
    $puntosC2 = $_POST['puntosC2'];
    $puntosC3 = $_POST['puntosC3'];
    $puntosC = ($puntosC1 + $puntosC2 + $puntosC3);
    $totalPuntos = ($puntosA + $puntosB + $puntosC);
}

if (isset($_POST['btnresetear'])) {
    $puntosA = '0';
    $puntosB = '0';
    $puntosC = '0';
    $totalPuntos = '0';
}
?>
<html>
    <head>
        <title>Formulario</title>
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
            <form method="post" action="formularioDePuntos.php">
                <section id="formulario">
                    <table id="tabla1">
                        <thead>
                            <tr>
                                <th>A. Título (máximo 16pts)</th>
                                <th class="thbox">Puntos</th>
                                <th class="thbox">Asignados</th>
                            </tr>
                        </thead>
                        <tr>
                            <th> A.1 - Profesor de grado universitario y/o profesor de nivel superior de 4 años o mas(***)</th>
                            <th class="thbox">16</th>
                            <th class="thbox"><input type="checkbox" name="puntosA[]" value="16"></th>
                        </tr>
                        <tr>
                            <th> A.2 - Profesional universitario de 4 años o mas certificación de formación pedagógica</th>
                            <th class="thbox">16</th>
                            <th class="thbox"><input type="checkbox" name="puntosA[]" value="16"></th>
                        </tr>
                        <tr>
                            <th> A.3 - Profesional de 4 años sin certificación de formación pedagógica</th>
                            <th class="thbox">12</th>
                            <th class="thbox"><input type="checkbox" name="puntosA[]" value="12"></th>
                        </tr>
                        <tr>
                            <th> A.4 - Técnico de nivel superior y formación docente(habilitante para nivel superior)</th>
                            <th class="thbox">10</th>
                            <th class="thbox"><input type="checkbox" name="puntosA[]" value="10"></th>
                        </tr>
                        <tr>
                            <th> A.5 - Técnico de nivel superior(Técnico de 3 o mas años)</th>
                            <th class="thbox">8</th>
                            <th class="thbox"><input type="checkbox" name="puntosA[]" value="8"></th>
                        </tr>
                        <thead>
                            <tr>
                                <th>Total A. título</th>
                                <th class="thbox"></th>
                                <th class="thbox"><?php echo "$puntosA"; ?></th>
                            </tr>
                        </thead>
                        <!--SECTOR B-->
                        <thead>
                            <tr>
                                <th>B. Formación posterior al titulo base(máximo 6pts)</th>
                                <th class="thbox">Puntos</th>
                                <th class="thbox">Asignados</th>
                            </tr>
                        </thead>
                        <tr>
                            <th> B.1 - Diplomatura / postítulo / actualización academica(++)</th>
                            <th class="thbox">1</th>
                            <th class="thbox"><input type="checkbox" name="puntosB[]" value="1"></th>
                        </tr>
                        <tr>
                            <th> B.2 - Especialización</th>
                            <th class="thbox">2</th>
                            <th class="thbox"><input type="checkbox" name="puntosB[]" value="2"></th>
                        </tr>
                        <tr>
                            <th> B.3 - Licenciatura</th>
                            <th class="thbox">3</th>
                            <th class="thbox"><input type="checkbox" name="puntosB[]" value="3"></th>
                        </tr>
                        <tr>
                            <th> B.4 - Maestría</th>
                            <th class="thbox">4</th>
                            <th class="thbox"><input type="checkbox" name="puntosB[]" value="4"></th>
                        </tr>
                        <tr>
                            <th> B.5 - Doctorado</th>
                            <th class="thbox">6</th>
                            <th class="thbox"><input type="checkbox" name="puntosB[]" value="6"></th>
                        </tr>
                        <thead>
                            <tr>
                                <th>Total B. Formacion posterior al título base</th>
                                <th class="thbox"></th>
                                <th class="thbox"><?php echo "$puntosB"; ?></th>
                            </tr>
                        </thead>
                        <!--SECTOR C-->
                        <thead>
                            <tr>
                                <th>C. Antigüedad docente(Hasta 15pts como total acumulable)</th>
                                <th class="thbox">Puntos</th>
                                <th class="thbox">Asignados</th>
                            </tr>
                        </thead>
                        <tr>
                            <th> C.1 - Total en la docencia fuera del nivel superior(0,5 pts por año)</th>
                            <th class="thbox">0,5</th>
                            <th class="thbox"><input type="number" name="puntosC1" value="0" step="0.5"></th>
                        </tr>
                        <tr>
                            <th> C.2 - En el nivel superior del instituto(0,7 pts por año o fracion no menos a 6 meses)</th>
                            <th class="thbox">0,7</th>
                            <th class="thbox"><input type="number" name="puntosC2" value="0" step="0.7"></th>
                        </tr>
                        <tr>
                            <th> C.3 - En la institucion(1 pts por año o fraccion no menor a 6 meses)</th>
                            <th class="thbox">1</th>
                            <th class="thbox"><input type="number" name="puntosC3" value="0"></th>
                        </tr>
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
                    <input type="submit" name="btnenviar" value="Calcular">
                    <input type="submit" name="btnresetear" value="Resetear">     
                </section>
            </form> 
            <section id="boton">
                
                <form action="../php/puntos.php" method="post">
                    <input type="hidden" name="puntosA" value="<?php echo "$puntosA"; ?>">
                    <input type="hidden" name="puntosB" value="<?php echo "$puntosB"; ?>">
                    <input type="hidden" name="puntosC" value="<?php echo "$puntosC"; ?>">
                    <input type="hidden" name="totalPuntos" value="<?php echo "$totalPuntos"; ?>">
                    <input class="boton" type="submit" value="Finalizar">
                </form>
            </section>
        </main>
    </body>
</html>