<?php
// Ruta absoluta al archivo ZKLib.php
require(__DIR__ . '/../vendor/lib/zklib/ZKLib.php');
header('Content-Type: application/json');
$enableGetDeviceInfo = true;
$enableGetUsers = true;
$enableGetData = true;
$ipreloj = '192.168.1.75';

$zk = new ZKLib($ipreloj);
$ret = $zk->connect();

$attendance = $zk->getAttendance();
$users = $zk->getUser();

$datos = []; // Cambié el nombre de la variable para que sea más descriptivo

foreach ($attendance as $attItem) {
    $UID = $attItem['uid'];
    $id = $attItem['id'];
    $nombre = isset($users[$attItem['id']]) ? $users[$attItem['id']]['name'] : $attItem['id'];
    $acceso = ZK\Util::getAttState($attItem['state']);
    $fecha = date("d-m-Y", strtotime($attItem['timestamp']));
    $hora = date("H:i:s", strtotime($attItem['timestamp']));
    $registro = ZK\Util::getAttType($attItem['type']);

    // Añado los datos al array correctamente
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

$respuesta = $datos; // Cambié el nombre de la variable para que sea más descriptivo

// Imprime la respuesta JSON antes de finalizar el script
echo json_encode($respuesta);