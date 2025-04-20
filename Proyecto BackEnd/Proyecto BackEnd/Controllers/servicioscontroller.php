<?php
require_once '../Modelos/servicios.php';

class ServiciosController {
    private $serviciosModel;

    public function __construct($conexion) {
        $this->serviciosModel = new Servicios($conexion);
    }

    public function obtenerTodos() {
        try {
            $servicios = $this->serviciosModel->obtenerTodos();
            echo json_encode($servicios);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function obtenerPorId($id) {
        try {
            $servicio = $this->serviciosModel->obtenerPorId($id);
            if ($servicio) {
                echo json_encode($servicio);
            } else {
                echo json_encode(['error' => 'Servicio no encontrado']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function crear($nombre, $costo, $duracion, $descripcion, $tipo, $minIntegrantes, $maxIntegrantes) {
        try {
            $resultado = $this->serviciosModel->crear($nombre, $costo, $duracion, $descripcion, $tipo, $minIntegrantes, $maxIntegrantes);
            if ($resultado) {
                echo json_encode(['mensaje' => 'Servicio creado correctamente']);
            } else {
                echo json_encode(['error' => 'No se pudo crear el servicio']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
?>