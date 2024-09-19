<?php
$uri = parse_url($_SERVER['REQUEST_URI']);


$routes = [
    '/dynamic_web_app/' => 'controllers/index.php',
    '/dynamic_web_app/about' => 'controllers/about.php',
    '/dynamic_web_app/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri['path'], $routes)) {
    require $routes[$uri['path']];
} else {
    abort();
}
