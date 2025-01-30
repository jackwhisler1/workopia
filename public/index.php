<?php
session_start();
require '../helpers.php';
require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;

// Instantiating the router
$router = new Router();

// Get routes
$routes = require(basePath('routes.php'));

// Get the current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
