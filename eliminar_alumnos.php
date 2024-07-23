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
$sql = $conn -> query("DELETE FROM alumno WHERE id= '$id' ");
$sql1 = $conn -> query("DELETE FROM notas WHERE fk_id_alumno= '$id' ");
header('Location:interfaz.php');
?>