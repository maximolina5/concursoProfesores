<?php
include("conexion.php");
$con= conectar();

$id_profesor=$_POST['id_profesor'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$puntos=$_POST['puntos'];

$sql="INSERT INTO profesores VALUES('$id_profesor','$nombre','$apellido','$dni','$puntos')";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: profesor.php");
}else {
    
}
?>




