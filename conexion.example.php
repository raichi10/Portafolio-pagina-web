<?php
/**
 * Archivo de conexión a la base de datos usando PDO
 * Copia este archivo como conexion.php y completa con tus credenciales
 */

$host = 'localhost';
$dbname = 'nombre_base_de_datos';
$username = 'usuario_db';
$password = 'contraseña_db';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
