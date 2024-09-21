<?php

use Core\Database;

spl_autoload_register(function ($class) {
    // replace backslashes with forward slashes
    $class = str_replace("\\", "/", $class);
    require "{$class}.php";
});

require "Core/functions.php";


$config = require "config.php";
$db = new Database($config["DATABASE"]);

$currentUserId = 3;


$router = new Core\Router();
require "routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

require $router->route($uri, $method);