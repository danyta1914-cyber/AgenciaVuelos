<?php
// Parámetros de conexión
$servername = "localhost";
$username = "root";
$password = "";
$database = "AGENCIA";

// Crear conexión con MySQLi
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Opcional: establecer codificación UTF-8
$conn->set_charset("utf8");
?>