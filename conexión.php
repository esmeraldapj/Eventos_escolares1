<?php
$conexion = new mysqli("localhost","usuario","password","basedatos");

if($conexion->connect_error){
    die("Error de conexión");
}
?>
