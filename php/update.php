<?php
include("../php/conexion.php");
$conexion= conectar();

$id_profesor=$_POST['id_profesor'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$puntos=$_POST['puntos'];

$sql="UPDATE profesores SET nombre='$nombre',apellido='$apellido',dni='$dni',puntos='$puntos' WHERE id_profesor='$id_profesor'";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: profesor.php");
}