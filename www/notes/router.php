<?php
$uri = parse_url($_SERVER['REQUEST_URI']);


$routes = [
    '/notes/note' => 'controllers/note.php',
    '/notes/create' => 'controllers/note-create.php',
];


if (array_key_exists($uri['path'], $routes)) {
    require $routes[$uri['path']];
} else {
    require "controllers/index.php";
}
