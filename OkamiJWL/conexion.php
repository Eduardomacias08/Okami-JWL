<?php
$servername = "autorack.proxy.rlwy.net";
$username = "root";
$password = "YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa";
$dbname = "railway";
$port = 3306; // Puerto de conexión

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
