<?php

// Importar la clase ZKLib
include('zklib/ZKLib.php');

// Definir rutas
$routes = [
    '/connect' => [
        'GET' => 'ZKLib@connect',
    ],
    '/disconnect' => [
        'GET' => 'ZKLib@disconnect',
    ],
    '/version' => [
        'GET' => 'ZKLib@version',
    ],
    '/os-version' => [
        'GET' => 'ZKLib@osVersion',
    ],
    '/platform' => [
        'GET' => 'ZKLib@platform',
    ],
    '/fm-version' => [
        'GET' => 'ZKLib@fmVersion',
    ],
    '/work-code' => [
        'GET' => 'ZKLib@workCode',
    ],
    '/ssr' => [
        'GET' => 'ZKLib@ssr',
    ],
    '/pin-width' => [
        'GET' => 'ZKLib@pinWidth',
    ],
    '/face-function-on' => [
        'GET' => 'ZKLib@faceFunctionOn',
    ],
    '/serial-number' => [
        'GET' => 'ZKLib@serialNumber',
    ],
    '/device-name' => [
        'GET' => 'ZKLib@deviceName',
    ],
    '/disable-device' => [
        'GET' => 'ZKLib@disableDevice',
    ],
    '/enable-device' => [
        'GET' => 'ZKLib@enableDevice',
    ],
    '/user' => [
        'GET' => 'ZKLib@getUser',
        'POST' => 'ZKLib@setUser',
        'DELETE' => 'ZKLib@removeUser',
    ],
    '/fingerprint' => [
        'GET' => 'ZKLib@getFingerprint',
        'POST' => 'ZKLib@setFingerprint',
        'DELETE' => 'ZKLib@removeFingerprint',
    ],
    '/clear-users' => [
        'GET' => 'ZKLib@clearUsers',
    ],
    '/clear-admin' => [
        'GET' => 'ZKLib@clearAdmin',
    ],
    '/attendance' => [
        'GET' => 'ZKLib@getAttendance',
        'DELETE' => 'ZKLib@clearAttendance',
    ],
    '/time' => [
        'GET' => 'ZKLib@getTime',
        'POST' => 'ZKLib@setTime',
    ],
];

// Enrutamiento
if (isset($routes[$_SERVER['REQUEST_URI']])) {
    $route = $routes[$_SERVER['REQUEST_URI']];
    if (isset($route[$_SERVER['REQUEST_METHOD']])) {
        $method = $route[$_SERVER['REQUEST_METHOD']];
        $parts = explode('@', $method);
        $controller = new $parts[0];
        $action = $parts[1];
        $controller->$action();
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
    }
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found']);
}
