<?php
require_once("clase.php");

// Recuperación de datos enviados por el formulario
$hotel = $_POST['hotel'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$fecha = $_POST['fecha'];
$duracion = $_POST['duracion'];

// Creación del objeto con los datos recibidos
$viaje = new FiltroViaje($hotel, $ciudad, $pais, $fecha, $duracion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la búsqueda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
<h2>Resumen de tu intención de viaje</h2>

<?php
// Mostrar información del viaje
echo $viaje->mostrarFiltro();
?>

<br><br>
<a href="index.php">Volver al formulario</a>

</body>
</html>
