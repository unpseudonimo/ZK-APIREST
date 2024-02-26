<?php
include('zklib/ZKLib.php');
header('Content-Type: application/json');
$enableGetDeviceInfo = true;
$enableGetUsers = true;
$enableGetData = true;

$zk = new ZKLib('192.168.1.75');
$ret = $zk->connect();

$usuarios = $zk->getUser();
$ultimoUsuario = end($usuarios);
$ultimoUID = $ultimoUsuario['uid'];
$ultimoUserID = $ultimoUsuario['userid'];
$uid = $ultimoUID + 1;
$userid = $ultimoUserID + 1;

// Obtener datos recibidos en la solicitud POST desde Flask
$data_post_from_flask = json_decode(file_get_contents('php://input'), true);
// Inicializar variables
$name = isset($data_post_from_flask['name']) ? $data_post_from_flask['name'] : '';
$password = isset($data_post_from_flask['password']) ? $data_post_from_flask['password'] : '';
$role = isset($data_post_from_flask['rol']) ? (string)$data_post_from_flask['rol'] : ''; 
$cardno = isset($data_post_from_flask['cardno']) ? $data_post_from_flask['cardno'] : '';

if ($role == 'User'){
    $rol1=ZK\Util::LEVEL_USER;
    $respuesta1 = $zk->setUser($uid, $userid, $name, $password, ZK\Util::LEVEL_USER, $cardno);
}else{
    $rol2=ZK\Util::LEVEL_ADMIN;
    $respuesta1 = $zk->setUser($uid, $userid, $name, $password, ZK\Util::LEVEL_ADMIN, $cardno);
}

// Procesar los datos y determinar si fue exitoso o hubo un error
$operacion_exitosa = true; // Puedes ajustar esto según tu lógica

if ($operacion_exitosa) {
    $respuesta = array('mensaje' => 'Operación exitosa:');
} else {
    $respuesta = array('error' => 'Hubo un error en la operación');
}

echo json_encode($respuesta);


?>