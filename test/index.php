<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Transacciones</title>
</head>
<body>
    <h1>Buscar Transacciones</h1>
    <form action="buscar.php" method="POST">
        <label for="fecha_inicial">Fecha Inicial:</label>
        <input type="date" id="fecha_inicial" name="fecha_inicial" required><br><br>
        
        <label for="fecha_final">Fecha Final:</label>
        <input type="date" id="fecha_final" name="fecha_final" required><br><br>
        
        <label for="cajero">Cajero:</label>
        <select id="cajero" name="cajero" required>
            <option value="1">Cajero 1</option>
            <option value="2">Cajero 2</option>
            <option value="3">Cajero 3</option>
        </select><br><br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>
