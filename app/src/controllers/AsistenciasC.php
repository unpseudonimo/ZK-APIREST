<?php


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class AsistenciasController
{

    // Definir la variable $ipreloj como propiedad de la clase
    private static $ipreloj = '192.168.0.126';


    public function obtenerAsistencias(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once($zklibPath);


        $zk = new ZKLib(self::$ipreloj);
        $zk->connect();

        $attendance = $zk->getAttendance();
        $users = $zk->getUser();

        $datos = [];

        foreach ($attendance as $attItem) {
            $UID = $attItem['uid'];
            $id = $attItem['id'];
            $nombre = isset($users[$attItem['id']]) ? $users[$attItem['id']]['name'] : $attItem['id'];
            $acceso = ZK\Util::getAttState($attItem['state']); // Utiliza el namespace completo para Util
            $fecha = date("d-m-Y", strtotime($attItem['timestamp']));
            $hora = date("H:i:s", strtotime($attItem['timestamp']));
            $registro = ZK\Util::getAttType($attItem['type']); // Utiliza el namespace completo para Util

            $datos[] = array(
                'UID' => $UID,
                'id_empleado' => $id,
                'nombre_empleado' => $nombre,
                'tipo_acceso' => $acceso,
                'fecha_registro' => $fecha,
                'hora_registro' => $hora,
                'registro' => $registro
            );
        }

        $respuesta = $datos;

        $zk->disconnect();

        // Devolver la respuesta JSON en lugar de imprimirla
        $response->getBody()->write(json_encode($respuesta));
        return $response;
    }

    public function limpiarAsistencias(Request $request, Response $response, $args)
    {
        // Ruta absoluta al archivo ZKLib.php
        $zklibPath = __DIR__ . '/../../../vendor/lib/zklib/ZKLib.php';
        require_once($zklibPath);


        $zk = new ZKLib(self::$ipreloj);
        $zk->connect();

        $respuesta = $zk->clearAttendance();


        $zk->disconnect();

        $response->getBody()->write(json_encode($respuesta));
        return $response;

    }
}
