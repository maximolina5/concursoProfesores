<?php
include("conexion.php");
$con= conectar();

$id_profesor=$_POST['id_concurso'];
$nombre=$_POST['nombre'];

$sql="INSERT INTO concursos VALUES('$id_concurso','$nombre','null')";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: concurso.php");
}else {
    
}
?>
