<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class UsuariosController
{


    public function obtenerUsuarios(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once($zklibPath);

        $ipreloj = '192.168.1.75';
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

    public function crear(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once($zklibPath);

    }
}
