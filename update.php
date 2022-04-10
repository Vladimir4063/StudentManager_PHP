<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];
$dni=$_GET['dni'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];

$sql="UPDATE alumnos SET dni='$dni', Nombres='$nombres', Apellidos='$apellidos' WHERE id='$id'";
$query=mysqli_query($con, $sql);

if($query){
    Header("Location: alumnos.php");
}else{
}

?>