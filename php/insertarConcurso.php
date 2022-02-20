<?php
include("conexion.php");
$conexion= conectar();

$id_concurso=$_POST['id_concurso'];
$nombre_concurso=$_POST['nombre'];

$sql="INSERT INTO concursos VALUES('$id_concurso','$nombre_concurso')";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: concurso.php");
}else {
    
}