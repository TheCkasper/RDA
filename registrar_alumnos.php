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


$sql1 = $conn -> query("SELECT id FROM alumno WHERE cui = '$cui'");
$dd=0;
while($dat = $sql1 ->fetch_object()){
    $dd= $dat->id;
}
$sql1 = $conn -> query("INSERT INTO notas(fk_id_alumno,fk_nombre,fk_apellido,fk_grado,fk_carrera) VALUES('$dd','$nombre','$apellido','$grado','$carrera')");

header('Location:interfaz.php');
?>