<?php
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = md5($_POST['contraseña']);

    // Comprobar si ya existe un usuario con el mismo nickname
    $sql = "SELECT * FROM registrar WHERE usuario='$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirigir al formulario de registro con un mensaje de error
        echo "<script>alert('Usuario ya existe')</script>";
        exit();
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO registrar(nombre,apellido,usuario,contraseña) VALUES('$nombre', '$apellido', '$usuario', '$contraseña')";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>