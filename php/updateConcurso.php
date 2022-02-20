<?php
include("conexion.php");
$conexion= conectar();

$id_concurso=$_POST['id_concurso'];
$nombre_concurso=$_POST['nombre_concurso'];

$sql="UPDATE concursos SET nombre_concurso='$nombre_concurso' WHERE id_concurso='$id_concurso'";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: concurso.php");
}
