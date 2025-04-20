<?php
require_once '../Modelos/ciudades.php';

class CiudadesController {
    private $ciudadesModel;

    public function __construct($conexion) {
        $this->ciudadesModel = new Ciudades($conexion);
    }

    public function obtenerTodas() {
        try {
            $ciudades = $this->ciudadesModel->obtenerTodas();
            echo json_encode($ciudades);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function obtenerPorId($id) {
        try {
            $ciudad = $this->ciudadesModel->obtenerPorId($id);
            if ($ciudad) {
                echo json_encode($ciudad);
            } else {
                echo json_encode(['error' => 'Ciudad no encontrada']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
?>