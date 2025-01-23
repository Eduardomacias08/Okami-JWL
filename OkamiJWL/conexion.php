<?php
$host = 'localhost';
$port = '3306'; // Si no cambiaste el puerto.
$dbname = 'venta_plata_local'; // Cambia al nombre de tu base de datos.
$user = 'root';
$password = 'root'; // Deja vacío si no configuraste una contraseña en MySQL.

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
