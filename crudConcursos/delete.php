<?php
include("conexion.php");
$con= conectar();

$id_concurso=$_GET['id'];

$sql="DELETE FROM concursos WHERE id_concurso='$id_concurso'";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: concurso.php");
}
?>
