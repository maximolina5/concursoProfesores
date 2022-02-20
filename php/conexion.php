<?php
function conectar(){
    
$conexion = mysqli_connect("localhost", "root", "", "sistema_de_concursos");

return $conexion;
}
    