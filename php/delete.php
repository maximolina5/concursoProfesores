<?php
include("../php/conexion.php");
$conexion= conectar();

$id_profesor=$_GET['id'];

$sql="DELETE FROM profesores WHERE id_profesor='$id_profesor'";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: profesor.php");
}

