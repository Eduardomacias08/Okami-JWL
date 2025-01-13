<?php
$host = 'autorack.proxy.rlwy.net';  // Host proporcionado por Railway
$port = '12423';                    // Puerto proporcionado por Railway
$dbname = 'venta_plata';            // Cambia el nombre de la base de datos a "venta_plata"
$user = 'root';                     // Usuario de la base de datos
$password = 'YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa';  // Contraseña proporcionada

try {
    // Estableciendo la conexión
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión después de usarla
// Esto es opcional, ya que la conexión se cierra automáticamente cuando el script termina
$conn = null;
