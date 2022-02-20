<?php

//session_start();
//if(!isset($_SESSION['usuario'])){
//    echo '
//        <script>
//        alert("Por favor inicie sesion");
//        window.location = "index.php";
//        </script>
// ';
//    session_destroy();
//    die();
//}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>IES "Manuel Belgrano"</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
              rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/estilo_home.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
    </head>
    <body>
<!--        <a href="php/cerrar_session.php">Cerrar sesión</a>-->
         
   <header>
    <div class="contenedor_home">
        <img id="logo" src="../assets/images/cropped-onlylogo-1.png">
        <p class="nombre-instituto">Instituto Superior Manuel Belgrano</p>
    </div>
   </header>
    
<main>
    <section id="banner">
        <img src="../assets/images/computer-g2bcd86e83_1280.jpg">
      <div class="contenedor_home">
          <h2>Ya esta el ingreso para computación y redes</h2>
          <p>¿Quieres saber mas?</p>
          <a href="https://www.iesmb.edu.ar/bel/ingreso-computacion-y-redes-2022/">Ver mas...</a>
      </div>
    </section>
    
    <section id="bienvenidos">
        <h2>Bienvenidos al sistema de gestion de concursos</h2>
        <p>Aca podras crear concursos y agregar profesores, al final de cada concurso se elegira al mejor profesor para
        cada puesto y se informara a travez de la plataforma la cual podran podran ingresar y ver los profesores.</p>
    </section> 
    
    <section id="blog">
        <h3>Las ultimas noticias del instituto</h3>
        <div class="contenedor_home">
            <article>
                <a href="https://www.iesmb.edu.ar/bel/junta-electoral/">
                    <img src="../assets/images/junta.jpg" alt="">
                </a>    
                <h4>Junta Electoral</h4>
            </article>
            <article>
                <a href="https://www.iesmb.edu.ar/bel/procedimiento-mesas-febrero-marzo-2022/">
                    <img src="../assets/images/mesas_1.jpg" alt>
                </a>
                <h4>Mesas febrero marzo 2022</h4>
            </article>
            <article>
                <a href="https://www.iesmb.edu.ar/bel/seleccionado-para-el-5-salon-provincial-de-fotografia/">
                    <img src="../assets/images/ULICES-1024x723.jpg" alt="">
                </a>   
                <h4>5° Salón provincial de Fotografía</h4>
            </article>
        </div>
    </section>
    
    <section id="profesores">
        <h3>Crea profesores con sus respectivos puntos de docencia, para posteriormente agregarlos en futuros concursos</h3>
        <div class="contenedor_home">
            <div class="funciones">  
                <a href="../php/profesor.php"><img src="../assets/images/contratacion.png" alt=""></a>
                <h4>Gestion de profesores</h4>
            </div>
            <div class="funciones"> 
                <a href="../php/concurso.php"><img src="../assets/images/reporte.png" alt=""></a>
                <h4>Gestion de concursos</h4>
            </div>
            <div class="funciones">
                <img src="../assets/images/archivo.png" alt="">
                <h4>Consultar resultados</h4>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="contenedor_home">
        <p class="copy">IESMB &copy;2022 IES "Manuel Belgrano"</p>
        <div class="sociales">
            <a class="icon-facebook" href="https://www.facebook.com/iesmbrodeo"></a>
            <a class="icon-instagram" href="https://www.instagram.com/ies9008manuelbelgrano/"></a>
            <a class="icon-location" href="https://www.google.com/maps/place/IES+9-008+Manuel+Belgrano+-+Sede+Godoy+Cruz
            /@-32.911132,-68.845948,18z/data=!4m5!3m4!1s0x0:0x8bd4ca97336e5fdb!8m2!3d-32.9111323!4d-68.8459484?hl=es-AR"></a>
        </div>
    </div>
</footer>

    </body>
</html>

