<?php
$host = getenv('autorack.proxy.rlwy.net');
$port = getenv('12423');
$dbname = getenv('railway');
$username = getenv('root');
$password = getenv('YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa');

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
