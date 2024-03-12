<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Importa el controlador de usuarios
require_once __DIR__ . '/../controllers/UsuariosC.php';

// Grupo de rutas para usuarios
$app->group('/usuarios', function ($app) {
    // Ruta para obtener todos los usuarios
    $app->get('/obtener', function (Request $request, Response $response, $args) {
        $controller = new UsuariosController();
        return $controller->obtenerUsuarios($request, $response, $args);
    });

});

