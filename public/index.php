<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

$app = AppFactory::create();

// Importa tus archivos de rutas
require '../app/src/routes/UsuariosR.php';
require '../app/src/routes/AsistenciasR.php';

$app->run();
