<?php
include("conexion.php");

$sql = "SELECT * FROM HOTEL";
$result = $conn->query($sql);
?>

<h2>Lista de hoteles</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Ubicación</th>
<th>Habitaciones</th>
<th>Tarifa</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id_hotel']."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['ubicacion']."</td>";
    echo "<td>".$row['habitaciones_disponibles']."</td>";
    echo "<td>".$row['tarifa_noche']."</td>";
    echo "</tr>";
}
?>

</table>