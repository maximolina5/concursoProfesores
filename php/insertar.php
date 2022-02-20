<?php
include("../php/conexion.php");
$conexion= conectar();

//$id_profesor=$_POST['id_profesor'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
//$puntos=$_POST['puntos'];
//'$id_profesor',
$sql="INSERT INTO profesores(nombre, apellido, dni) VALUES('$nombre','$apellido','$dni')";
$query= mysqli_query($conexion, $sql);

if($query){
    Header("Location: profesor.php");
}else {
    
}