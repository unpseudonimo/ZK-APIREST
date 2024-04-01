<?php
include('zklib/ZKLib.php');
header('Content-Type: application/json');

// Obtener datos recibidos en la solicitud POST desde Flask
$data_post_from_flask = json_decode(file_get_contents('php://input'), true);

// Inicializar variables
$uid = isset($data_post_from_flask['uid']) ? $data_post_from_flask['uid'] : '';

// Crear una instancia de la clase ZKLib
$zk = new ZKLib('192.168.1.75');
$ret = $zk->connect();

// Eliminar al usuario con el uid proporcionado
$respuesta = $zk->removeUser($uid);

// Procesar los datos y determinar si fue exitoso o hubo un error
$operacion_exitosa = true;

if ($operacion_exitosa) {
    $respuesta = array('mensaje' => 'Usuario eliminado exitosamente');
} else {
    $respuesta = array('error' => 'Hubo un error al eliminar el usuario');
}

echo json_encode($respuesta);
?>