<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class UsuariosController
{


    public function obtenerUsuarios(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once ($zklibPath);

        $ipreloj = '192.168.0.126';
        $zk = new ZKLib($ipreloj);
        $zk->connect();

        $users = $zk->getUser();

        $datos = [];
        foreach ($users as $uItem) {
            $UID = $uItem['uid'];
            $id = $uItem['userid'];
            $name = $uItem['name'];
            $Cardno = $uItem['cardno'];
            $rol = ZK\Util::getUserRole($uItem['role']);

            // Añado los datos al array correctamente
            $datos[] = array(
                'UID' => $UID,
                'id' => $id,
                'name' => $name,
                'Cardno' => $Cardno,
                'rol' => $rol
            );
        }
        $respuesta = $datos; // Cambié el nombre de la variable para que sea más descriptivo

        $zk->disconnect();

        // Devolver la respuesta JSON en lugar de imprimirla
        $response->getBody()->write(json_encode($respuesta));
        return $response;
    }

    public function registrarUsuario(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once ($zklibPath);

        $ipreloj = '192.168.0.126';
        $zk = new ZKLib($ipreloj);
        $zk->connect();

        $usuarios = $zk->getUser();
        $ultimoUsuario = end($usuarios);
        $ultimoUID = $ultimoUsuario['uid'];
        $ultimoUserID = $ultimoUsuario['userid'];
        $uid = $ultimoUID + 1;
        $userid = $ultimoUserID + 1;

        // Obtener datos recibidos en la solicitud POST desde Flask
        $data_post_from_flask = json_decode(file_get_contents('php://input'), true);
        // Inicializar variables
        $name = isset ($data_post_from_flask['name']) ? $data_post_from_flask['name'] : '';
        $password = isset ($data_post_from_flask['password']) ? $data_post_from_flask['password'] : '';
        $role = isset ($data_post_from_flask['rol']) ? (string) $data_post_from_flask['rol'] : '';
        $cardno = isset ($data_post_from_flask['cardno']) ? $data_post_from_flask['cardno'] : '';

        if ($role == 'User') {
            $rol1 = ZK\Util::LEVEL_USER;
            $respuesta1 = $zk->setUser($uid, $userid, $name, $password, ZK\Util::LEVEL_USER, $cardno);
        } else {
            $rol2 = ZK\Util::LEVEL_ADMIN;
            $respuesta1 = $zk->setUser($uid, $userid, $name, $password, ZK\Util::LEVEL_ADMIN, $cardno);
        }

        // Procesar los datos y determinar si fue exitoso o hubo un error
        $operacion_exitosa = true; // Puedes ajustar esto según tu lógica

        if ($operacion_exitosa) {
            $respuesta = array('mensaje' => 'Operación exitosa:');
        } else {
            $respuesta = array('error' => 'Hubo un error en la operación');
        }

        // Devolver la respuesta JSON en lugar de imprimirla
        $response->getBody()->write(json_encode($respuesta));
        return $response;
    }

    public function eliminarUsuario(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once ($zklibPath);

        $ipreloj = '192.168.0.126';
        $zk = new ZKLib($ipreloj);
        $zk->connect();

        // Obtener datos recibidos en la solicitud POST desde Flask
        $data_post_from_flask = json_decode(file_get_contents('php://input'), true);

        // Inicializar variables
        $uid = isset ($data_post_from_flask['uid']) ? $data_post_from_flask['uid'] : '';

        // Eliminar al usuario con el uid proporcionado
        $respuesta = $zk->removeUser($uid);

        // Procesar los datos y determinar si fue exitoso o hubo un error
        $operacion_exitosa = true;

        if ($operacion_exitosa) {
            $respuesta = array('mensaje' => 'Usuario eliminado exitosamente');
        } else {
            $respuesta = array('error' => 'Hubo un error al eliminar el usuario');
        }

        // Devolver la respuesta JSON en lugar de imprimirla
        $response->getBody()->write(json_encode($respuesta));
        return $response;
    }
}
