<?php
$host = getenv('autorack.proxy.rlwy.net');
$port = getenv('12423');
$dbname = getenv('railway');
$user = getenv('root');
$password = getenv('YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa');

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
