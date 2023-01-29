<?php

use Router\Router;

require_once "../vendor/autoload.php";

define('ROOT', dirname(__DIR__));

define('DB_NAME', 'databaseName');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

// URLs du site
    $router->get('/', 'src\Controllers\HomeController@index');

    
$router->run();