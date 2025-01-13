<?php
$host = 'autorack.proxy.rlwy.net';
$port = 12423;
$dbname = 'railway';
$user = 'root';
$password = 'YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa';

try {
    $conexion = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
