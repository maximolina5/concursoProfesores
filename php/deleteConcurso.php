<?php
include("conexion.php");
$conexion= conectar();

$id_concurso=$_GET['id'];

$sql="DELETE FROM concursos WHERE id_concurso='$id_concurso'";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: concurso.php");
}

