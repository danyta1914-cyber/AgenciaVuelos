<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones = $_POST['habitaciones'];
$tarifa = $_POST['tarifa'];

$sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche)
VALUES ('$nombre','$ubicacion','$habitaciones','$tarifa')";

if($conn->query($sql) === TRUE) {
    echo "Hotel registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>