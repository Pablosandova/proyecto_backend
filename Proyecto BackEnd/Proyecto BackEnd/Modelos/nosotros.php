<?php
class Nosotros {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerInformacion() {
        $query = "SELECT * FROM Nosotros";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $mision, $vision, $equipo, $jerarquia) {
        $query = "UPDATE Nosotros SET Mision = :mision, Vision = :vision, Equipo = :equipo, Jerarquia = :jerarquia WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':mision', $mision, PDO::PARAM_STR);
        $stmt->bindParam(':vision', $vision, PDO::PARAM_STR);
        $stmt->bindParam(':equipo', $equipo, PDO::PARAM_STR);
        $stmt->bindParam(':jerarquia', $jerarquia, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>