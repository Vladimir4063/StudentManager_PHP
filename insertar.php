<?php
include("conexion.php");
$con = conectar();

$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$sql = "INSERT INTO alumnos VALUES ('$dni','$nombres','$apellidos')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: alumnos.php");
}else{
    
}

?>