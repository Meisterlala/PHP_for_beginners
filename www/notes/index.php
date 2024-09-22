<?php

use Core\Database;

spl_autoload_register(function ($class) {
    // replace backslashes with forward slashes
    $class = str_replace("\\", "/", $class);
    require "{$class}.php";
});

require "Core/functions.php";
require "bootstrap.php";



$router = new Core\Router();
require "routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);