<?php
include("conexion.php");

$evento = $_POST['evento'];
$lugar = $_POST['lugar'];
$responsable = $_POST['responsable'];
$hora = $_POST['hora'];

$sql = "INSERT INTO eventos(evento,lugar,responsable,hora)
VALUES('$evento','$lugar','$responsable','$hora')";

if($conexion->query($sql)){
    echo "Registro guardado";
}else{
    echo "Error";
}
?>
