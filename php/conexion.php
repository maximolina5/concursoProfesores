<?php
function conectar(){
    
$conexion = mysqli_connect("localhost", "root", "admin", "sistema_de_concursos");

return $conexion;
}
    