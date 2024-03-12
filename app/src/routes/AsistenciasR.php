<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Importa el controlador de asistencias
require_once __DIR__ . '/../controllers/AsistenciasC.php';

// Grupo de rutas para asistencias
$app->group('/asistencias', function ($app) {

    // Ruta para obtener todas las asistencias
    $app->get('', function (Request $request, Response $response, $args) {
        $controller = new AsistenciasController();
        return $controller->obtenerAsistencias($request, $response, $args);
    });

    $app->get('/limpiar', function (Request $request, Response $response, $args) {
        $controller = new AsistenciasController();
        return $controller->limpiarAsistencias($request, $response, $args);
    });


});
