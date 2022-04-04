<?php
include("conexion.php");
$con = conectar();

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];

$sql = "INSERT INTO alumnos VALUES ($dni,'$nombres','$apellidos')";
$query = mysqli_query($con, $sql);


if($query){
    Header("Location: alumnos.php");
}else{
}

?>