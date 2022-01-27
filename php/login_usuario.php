<?php

session_start();

include './conexion.php';

$correo_login = $_POST['correo_login'];
$contrasenia_login = $_POST['contrasenia_login'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo_login' and contrasenia='$contrasenia_login'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo_login;
    header("location: ../bienvenido.php");
    exit();
}else{
    echo '
          <script>
          alert("El usuario ingresado no existe, por favor verifique los datos ingresados");
          window.location = "../index.php";
          </script>
';
    exit();
}

