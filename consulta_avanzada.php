<?php
include("conexion.php");

$sql = "
SELECT 
    HOTEL.nombre,
    HOTEL.ubicacion,
    COUNT(RESERVA.id_reserva) AS total_reservas

FROM RESERVA

INNER JOIN HOTEL 
ON RESERVA.id_hotel = HOTEL.id_hotel

GROUP BY HOTEL.id_hotel

HAVING COUNT(RESERVA.id_reserva) > 2
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Consulta Avanzada</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">

<h2>Hoteles con más de 2 reservas</h2>

<table border="1">

<tr>
<th>Hotel</th>
<th>Ubicación</th>
<th>Total Reservas</th>
</tr>

<?php

while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['ubicacion']."</td>";
    echo "<td>".$row['total_reservas']."</td>";
    echo "</tr>";
}

?>

</table>

</div>

</body>
</html>
