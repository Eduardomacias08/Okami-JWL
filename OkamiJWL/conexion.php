



<?php
$servername = "autorack.proxy.rlwy.net"; // El host proporcionado por Railway
$username = "root";                     // El usuario de MySQL (en tu caso es "root")
$password = "YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa"; // La contraseña proporcionada
$dbname = "railway";                    // El nombre de la base de datos en Railway

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, 12423); // Asegúrate de incluir el puerto 12423

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>