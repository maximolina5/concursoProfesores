<?php
include("conexion.php");
$con= conectar();

$id_profesor=$_GET['id'];

$sql="DELETE FROM profesores WHERE id_profesor='$id_profesor'";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: profesor.php");
}
?>