<?php

use Jjcode\Myphporg\Controllers\ErrorController;
use Jjcode\Myphporg\Controllers\HomeController;
use Jjcode\Myphporg\Controllers\UserController;
use Jjcode\Myphporg\Src\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

//user register
$router->get('/register', UserController::class, 'register');
$router->post('/register', UserController::class, 'register');
//login
$router->get('/login', UserController::class, 'signin');
$router->post('/login', UserController::class, 'signin');
//logout
$router->get('/logout', UserController::class, 'logout');



//user management
$router->get('/users', UserController::class, 'index');


//profile
$router->get('/me', UserController::class, 'me');
$router->post('/me', UserController::class, 'me');

//user
$router->get('/user/view',UserController::class, 'view');
$router->post('/user/view',UserController::class, 'view');

//error pages
$router->get('/404', ErrorController::class, 'error404');

$router->dispatch();