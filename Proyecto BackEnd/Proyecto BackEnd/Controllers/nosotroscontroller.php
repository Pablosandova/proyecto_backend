<?php
require_once '../Modelos/nosotros.php';

class NosotrosController {
    private $nosotrosModel;

    public function __construct($conexion) {
        $this->nosotrosModel = new Nosotros($conexion);
    }

    public function obtenerInformacion() {
        try {
            $informacion = $this->nosotrosModel->obtenerInformacion();
            echo json_encode($informacion);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function actualizar($id, $mision, $vision, $equipo, $jerarquia) {
        try {
            $resultado = $this->nosotrosModel->actualizar($id, $mision, $vision, $equipo, $jerarquia);
            if ($resultado) {
                echo json_encode(['mensaje' => 'Información actualizada correctamente']);
            } else {
                echo json_encode(['error' => 'No se pudo actualizar la información']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
?>