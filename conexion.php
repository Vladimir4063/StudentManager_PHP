<?php
function conectar(){
    // Registramos las credenciales de nuestra BD
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "educacion";

    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con,$db);

    return $con;
}
?>