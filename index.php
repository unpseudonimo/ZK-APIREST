<?php

include('zklib/ZKLib.php');

$enableGetDeviceInfo = true;
$enableGetUsers = true;
$enableGetData = true;

$zk = new ZKLib('192.168.1.75');

$ret = $zk->connect();

// Obtener la URL solicitada
$url = $_SERVER['REQUEST_URI'];

// Enrutamiento básico
switch ($url) {
    case '/crearusuario':
        // Verificar si la solicitud es PuaOST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            crearUsuario($zk);
        } else {
            // Método no permitido
            http_response_code(405);
            echo json_encode(array("message" => "Método no permitido."));
        }
        break;
    case '/eliminarusuario':
        // Verificar si la solicitud es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            eliminarUsuario($zk);
        } else {
            // Método no permitido
            http_response_code(405);
            echo json_encode(array("message" => "Método no permitido."));
        }
        break;
    case '/getusers':
        // Verificar si la solicitud es GET
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            getUsers($zk);
        } else {
            // Método no permitido
            http_response_code(405);
            echo json_encode(array("message" => "Método no permitido."));
        }
        break;
    default:
        // Página no encontrada
        http_response_code(404);
        echo json_encode(array("message" => "Página no encontrada."));
        break;
}

function crearUsuario($zk) {
    try {
        global $ultimoUID, $ultimoUserID;

        $uid = $ultimoUID + 1;
        $userid = $ultimoUserID + 1;

        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $name = $data['name'];
        $password = $data['password'];
        $role = $data['role'];
        $cardno = $data['cardno'];

        $respuesta = $zk->setUser($uid, $userid, $name, $password, $role, $cardno);

        echo json_encode(array("message" => "Usuario insertado correctamente."));
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al insertar el usuario: " . $e->getMessage()));
    }
}

function eliminarUsuario($zk) {
    try {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $uidToDelete = $data['uid'];
        $zk->removeUser($uidToDelete);

        // Puedes devolver una respuesta en JSON si es necesario
        echo json_encode(array("message" => "Usuario eliminado correctamente."));
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al eliminar el usuario: " . $e->getMessage()));
    }
}

function getUsers($zk) {
    try {
        $usuarios = $zk->getUser();
        echo json_encode($usuarios);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Error al obtener usuarios: " . $e->getMessage()));
    }
}
