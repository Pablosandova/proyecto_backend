<?php
try{
 $conexion = null;
$conexion = new PDO('mysql:host=localhost;dbname=proyecto_backend', 'root', '');
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>