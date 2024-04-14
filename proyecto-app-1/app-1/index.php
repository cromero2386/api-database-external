<?php
// Datos de conexión a la base de datos MySQL
$host = 'mysql-db'; // Nombre del servicio del contenedor MySQL en Docker Compose
$dbname = 'my_database';
$username = 'my_user';
$password = 'my_password';

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ejecutar una consulta SQL
    $stmt = $pdo->query("SELECT * FROM mi_tabla");
    // Mostrar los resultados de la consulta
    echo "<h2>Resultados de la consulta:</h2>";
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>{$row['columna']}</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    // Manejar errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}
