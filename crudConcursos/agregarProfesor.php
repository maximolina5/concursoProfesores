<?php
include("conexion.php");
$con = conectar();
//include ("adminConcurso.php");
$id_profesor=$_GET['id'];
$id_concurso=$_POST['id_concurso'];
$nombre_concurso=$_POST['nombre_concurso'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$puntos=$_POST['puntos'];
//$id_concurso=$_POST['id_concurso'];
//$nombre_concurso=$_POST['nombre_concurso'];




//$sqlc="SELECT * FROM concursos WHERE id_concurso='$id_concurso'";
//$queryc= mysqli_query($con, $sqlc);
//$rowc= mysqli_fetch_array($queryc);
//$sqlp="SELECT * FROM profesores WHERE id_profesor='$id_profesor'";
//$queryp= mysqli_query($con, $sqlp);
//$rowp= mysqli_fetch_array($queryp);




//$nombre_concurso= $rowc['nombre'];
//$nombre_profesor=$rowp['nombre'];
//$puntos=$rowp['puntos'];

$sql="INSERT INTO registros VALUES('','$id_concurso','$id_profesor','$nombre_concurso','$nombre','$puntos')";
$query= mysqli_query($con, $sql);

if($query){
    Header("Location: listaConcursos.php");
}
?>
