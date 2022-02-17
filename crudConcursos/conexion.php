<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    
    $bd="sistema_de_concursos";
    
    $con= mysqli_connect($host,$user,$pass);
    
    mysqli_select_db($con, $bd);
    
    return $con;
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

