<?php
include("conexion.php");

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas = $_POST['plazas'];
$precio = $_POST['precio'];

// Validación básica PHP
if(empty($origen) || empty($destino)) {
    echo "Datos inválidos";
    exit;
}

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio)
VALUES ('$origen','$destino','$fecha','$plazas','$precio')";

if($conn->query($sql) === TRUE) {
    echo "Vuelo registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>