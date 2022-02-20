<?php
include("conexion.php");
$conexion = conectar();
$id_profesor=$_POST['id_profesor'];
$id_concurso=$_POST['id_concurso'];
$nombre_profesor=$_POST['nombre'];
$nombre_concurso=$_POST['nombre_concurso'];
$apellido=$_POST['apellido'];
$puntos=$_POST['puntos'];


$sql="INSERT INTO registro (id_profesor,id_concurso ,nombre_profesor ,nombre_concurso, puntos) VALUES('$id_profesor','$id_concurso','$nombre_profesor','$nombre_concurso','$puntos')";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: listarConcurso.php");
}