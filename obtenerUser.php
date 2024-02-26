<?php
include('zklib/ZKLib.php');
header('Content-Type: application/json');
$enableGetDeviceInfo = true;
$enableGetUsers = true;
$enableGetData = true;

$zk = new ZKLib('192.168.1.75');
$ret = $zk->connect();

$users = $zk->getUser();
sleep(1);
$datos = []; // Cambié el nombre de la variable para que sea más descriptivo
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

// Imprime la respuesta JSON antes de finalizar el script
echo json_encode($respuesta);
?>
