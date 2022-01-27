<?php

include './conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

$insertar  = "INSERT INTO usuario(nombre_completo, correo, usuario, contrasenia)
           VALUES('$nombre_completo', '$correo', '$usuario', '$contrasenia')";

//VERIFICACION DE CORREO PARA QUE NO SE REPITA

$verificar_correo = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo ' 
        <script>
            alert("Este correo ya esta registrado, intente con otro diferente");
            window.location = "../index.php";
        </script>
';
    exit();
    mysqli_close($conexion);    
}
//VERIFICACION DE USUARIO PARA QUE NO SE REPITA

$verificar_usuario = mysqli_query ($conexion, "SELECT * FROM usuario WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo ' 
        <script>
            alert("Este usuario ya esta registrado, intente con otro diferente");
            window.location = "../index.php";
        </script>
';
    exit();
    mysqli_close($conexion);    
}

$ejecutar = mysqli_query($conexion, $insertar);

if($ejecutar){
    echo '
    <script>
        alert("Su usuario se ah creado correctamente");
        window.location = "../index.php";
    </script>
';
}else{
    echo '
    <script>
        alert("Ups tuvimos un error intentelo nuevamente");
        window.location = "../index.php";
    </script>
';
}

mysqli_close($conexion);
