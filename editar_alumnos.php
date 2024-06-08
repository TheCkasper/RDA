<?php
include "conexion.php";
$id=$_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cui = $_POST['cui'];
$fecha_n = $_POST['fecha_n'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$grado = $_POST['grado'];
$carrera = $_POST['carrera'];

$sql = $conn -> query("UPDATE alumno SET nombre='$nombre',apellido='$apellido',cui='$cui',fecha_n='$fecha_n',telefono='$telefono',correo='$correo',direccion='$direccion',grado='$grado',carrera='$carrera' WHERE id= '$id' ");

header('Location:interfaz.php');

?>