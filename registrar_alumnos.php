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

$id = $_GET['id'];
$sql1 = "SELECT id FROM alumno WHERE nombre = '$nombre'";
$sql1 = $conn -> query("INSERT INTO notas(fk_id_alumno,fk_nombre,fk_apellido,fk_grado,fk_carrera) VALUES('$id','$nombre','$apellido','$grado','$carrera')");

header('Location:interfaz.php');
?>