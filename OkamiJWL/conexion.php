<?php
$servername = "localhost"; // O la dirección de tu servidor
$username = "root";        // Tu usuario de MySQL
$password = "root";        // Tu contraseña de MySQL
$dbname = "venta_plata"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
