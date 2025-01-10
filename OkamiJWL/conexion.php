<?php
$servername = "autorack.proxy.rlwy.net"; // O la dirección de tu servidor
$username = "root";        // Tu usuario de MySQL
$password = "YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa";        // Tu contraseña de MySQL
$dbname = "railway"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
