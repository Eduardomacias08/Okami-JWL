$servername = "autorack.proxy.rlwy.net"; 
$username = "root";        
$password = "YpeFZHtOVQXTBdGXiJqbJsEvxpFATZAa";        
$dbname = "railway"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
