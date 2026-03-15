<?php
include("conexion.php");

$sql = "SELECT * FROM VUELO";
$result = $conn->query($sql);
?>

<h2>Lista de vuelos</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Origen</th>
<th>Destino</th>
<th>Fecha</th>
<th>Plazas</th>
<th>Precio</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id_vuelo']."</td>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['destino']."</td>";
    echo "<td>".$row['fecha']."</td>";
    echo "<td>".$row['plazas_disponibles']."</td>";
    echo "<td>".$row['precio']."</td>";
    echo "</tr>";
}
?>

</table>