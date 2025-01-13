<?php
$host = 'autorack.proxy.rlwy.net';  // Host proporcionado por Railway
$port = '12423';                    // Puerto proporcionado por Railway
$dbname = 'venta_plata';            // Cambia el nombre de la base de datos a "venta_plata"
$user = 'root';                     // Usuario de la base de datos
$password = 'YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa';  // Contraseña proporcionada

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.<br>";

    // Probar una consulta para obtener los datos de la tabla "productos"
    $sql = "SELECT * FROM productos";
    $stmt = $conexion->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($resultados) {
        foreach ($resultados as $producto) {
            echo "Nombre: " . $producto['nombre'] . "<br>";
            echo "Precio: $" . $producto['precio'] . "<br>";
            echo "Descripción: " . $producto['descripcion'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No se encontraron productos.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
