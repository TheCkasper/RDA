<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña']; //    CONTRASEÑA
$sql = $conn -> query("INSERT INTO registrar(nombre,apellido,usuario,contraseña) VALUES('$nombre', '$apellido', '$usuario','$contraseña')");
header('Location:index.php');

?>