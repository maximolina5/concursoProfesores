<?php
include("conexion.php");
$con= conectar();

$id_concurso=$_POST['id_concurso'];
$nombre=$_POST['nombre'];

$sql="UPDATE concursos SET nombre='$nombre' WHERE id_concurso='$id_concurso'";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: concurso.php");
}
?>
