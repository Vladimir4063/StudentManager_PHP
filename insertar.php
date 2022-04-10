<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="INSERT INTO alumnos VALUES('$id','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumnos.php");
}else {
}
?>