<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "transacciones";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$fecha_inicial = $_POST['fecha_inicial'];
$fecha_final = $_POST['fecha_final'];
$cajero = $_POST['cajero'];

// Consulta SQL
$sql = "SELECT * FROM transacciones WHERE cajero = $cajero AND fecha BETWEEN '$fecha_inicial' AND '$fecha_final'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados
    echo "<h2>Resultados:</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Cliente</th><th>Cajero</th><th>Valor</th><th>Fecha</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["cliente"]."</td><td>".$row["cajero"]."</td><td>".$row["valor"]."</td><td>".$row["fecha"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}
$conn->close();
?>
