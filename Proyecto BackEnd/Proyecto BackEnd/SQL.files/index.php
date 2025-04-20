<?php
// Habilitar CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Incluir la conexión a la base de datos y los controladores
require_once '../Database.php';
require_once '../Controllers/CiudadesController.php';
require_once '../Controllers/NosotrosController.php';
require_once '../Controllers/ServiciosController.php';

// Crear la conexión a la base de datos
$db = new Database();
$conexion = $db->conectar();

// Instanciar los controladores
$ciudadesController = new CiudadesController($conexion);
$nosotrosController = new NosotrosController($conexion);
$serviciosController = new ServiciosController($conexion);

// Obtener la ruta solicitada
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', trim($uri, '/'));
$ruta = isset($uri[0]) ? $uri[0] : '';

// Manejar las rutas
switch ($ruta) {
    case 'ciudades':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $ciudadesController->obtenerTodas();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            $ciudadesController->crear($data['nombre']);
        }
        break;

    case 'nosotros':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nosotrosController->obtenerInformacion();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $data = json_decode(file_get_contents('php://input'), true);
            $nosotrosController->actualizar($data['id'], $data['mision'], $data['vision'], $data['equipo'], $data['jerarquia']);
        }
        break;

    case 'servicios':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $serviciosController->obtenerTodos();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            $serviciosController->crear(
                $data['nombre'],
                $data['costo'],
                $data['duracion'],
                $data['descripcion'],
                $data['tipo'],
                $data['minIntegrantes'],
                $data['maxIntegrantes']
            );
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['error' => 'Ruta no encontrada']);
        break;
}
?>