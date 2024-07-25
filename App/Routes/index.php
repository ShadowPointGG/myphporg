<?php

use Jjcode\Myphporg\Controllers\ErrorController;
use Jjcode\Myphporg\Controllers\HomeController;
use Jjcode\Myphporg\Src\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');


//error pages
$router->get('/404', ErrorController::class, 'error404');

$router->dispatch();