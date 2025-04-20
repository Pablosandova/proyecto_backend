<?php
class ServiciosCiudades {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM ServiciosCiudades";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $query = "SELECT * FROM ServiciosCiudades WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($idServicio, $idCiudad) {
        $query = "INSERT INTO ServiciosCiudades (idServicio, idCiudad) VALUES (:idServicio, :idCiudad)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':idServicio', $idServicio, PDO::PARAM_INT);
        $stmt->bindParam(':idCiudad', $idCiudad, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function actualizar($id, $idServicio, $idCiudad) {
        $query = "UPDATE ServiciosCiudades SET idServicio = :idServicio, idCiudad = :idCiudad WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':idServicio', $idServicio, PDO::PARAM_INT);
        $stmt->bindParam(':idCiudad', $idCiudad, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function eliminar($id) {
        $query = "DELETE FROM ServiciosCiudades WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>