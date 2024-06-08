<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cui = $_POST['cui'];
$fecha_n = $_POST['fecha_n'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$grado = $_POST['grado'];
$carrera = $_POST['carrera'];
$sql = $conn -> query("INSERT INTO alumno(nombre,apellido,cui,fecha_n,telefono,correo,direccion,grado,carrera) VALUES('$nombre','$apellido','$cui','$fecha_n','$telefono','$correo','$direccion','$grado','$carrera'
)");
header('Location:interfaz.php');
?>
