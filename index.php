<?php

    session_start();
    
    if(isset($_SESSION['usuario'])){
        header("location: bienvenido.php");
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Inicio </title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
              rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilo.css">  
        <img src="assets/images/logo manuel belgrano.png">
    </head>
    <body>
        <main>
            <div class="contenedor__todo"> 
                
                <div class="caja__trasera">
                  <div class="caja__trasera-login">
                      <h3>¿Ya tienes una cuenta?</h3>
                      <p>Inicia sesión para entrar en la pagina</p>
                      <button id="btn__iniciar-sesion"> iniciar sesión</button>
                  </div>
                     <div class="caja__trasera-register">
                      <h3>¿Aún no tienes una cuenta?</h3>
                      <p>Regístrate para que puedas iniciar sesión</p>
                      <button id="btn__registrarse"> Registrate</button>
                  </div>
                </div>
                
                    <div class="contenedor__login-register"> 
                        <form action="php/login_usuario.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Correo Electronico" name="correo_login">
                            <p class="login__correo-error">El correo ingresado no esta registrado por favor revise los datos ingresados</p>
                            <input type="password" placeholder="Contraseña" name="contrasenia_login">
                            <p class="login__contrasenia-error">La contraseña ingresada no es correcta, por favor intente de nuevo</p>
                            <button>Entrar</button>
                        </form>
                        <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                            <input type="text" placeholder="Correo Electronico" name="correo">
                            <p class="register__correo-error">El correo ingresado ya se encuentra registrado</p>
                            <input type="text" placeholder="Usuario" name="usuario"> 
                            <p class="register__usuario-error">El nombre de usuario debe contener de 8 a 14 caracteres, solo letras, numeros y guion bajo</p>
                            <input type="password" placeholder="Contraseña" name="contrasenia">
                            <p class="register__contrasenia-error">La contraseña debe tener de 8 a 12 digitos</p>
                            <button>Regístrarse</button>
                            <p class="register__error">Por favor complete todos los campos</p>
                        </form>
                    </div>
            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </body>
</html>

