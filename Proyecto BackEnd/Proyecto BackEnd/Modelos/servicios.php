<?php
class Servicio {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM Servicios";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $query = "SELECT * FROM Servicios WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $costo, $duracion, $descripcion, $tipo, $minIntegrantes, $maxIntegrantes) {
        $query = "INSERT INTO Servicios (Nombre, Costo, Duracion, Descripcion, Tipo, `Min integrantes`, `Max integrantes`) 
                  VALUES (:nombre, :costo, :duracion, :descripcion, :tipo, :minIntegrantes, :maxIntegrantes)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':costo', $costo, PDO::PARAM_INT);
        $stmt->bindParam(':duracion', $duracion, PDO::PARAM_INT);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
        $stmt->bindParam(':minIntegrantes', $minIntegrantes, PDO::PARAM_INT);
        $stmt->bindParam(':maxIntegrantes', $maxIntegrantes, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>