<?php
$host = 'autorack.proxy.rlwy.net';  // Host proporcionado por Railway
$port = '12423';                    // Puerto proporcionado por Railway
$dbname = 'railway';                 // Nombre de la base de datos proporcionada
$user = 'root';                     // Usuario de la base de datos
$password = 'YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa';  // Contraseña proporcionada

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
