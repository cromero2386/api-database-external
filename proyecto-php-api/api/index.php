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
    // Mostrar los resultados de la consulta en json
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convertir la matriz a JSON y mostrarla
    echo json_encode($rows);
} catch (PDOException $e) {
    // Manejar errores de conexión
    echo "Error de conexión: " . $e->getMessage();
}
